<?php
namespace App\Kernel;

class ModuloRota
{
    private $rotas;

    public function __construct()
    {
        $this->rotas = [];
    }

    public function adiciona($metodo, $uri, $chamada)
    {
        $this->rotas[] = ['metodo' => $metodo, 'uri' => $uri, 'chamada' => $chamada];
    }

    public function escutar()
    {
        $request_uri = $_SERVER['REQUEST_URI'];
        $metodo = $_SERVER['REQUEST_METHOD'];
        $uri = $request_uri === '/' ? $request_uri : rtrim($request_uri, '/');

        foreach ($this->rotas as $chave => $rota)
        {
            $parametros = explode('/', $rota['uri']);
            $principal = $parametros[1];
            if (count($parametros) > 2) {
                if (preg_match("/{+(.*?)}/", $parametros[2])) {
                    $aux = explode('/', $uri);
                    if (count($aux) === count($parametros) &&
                        preg_match("#^{$principal}$#", $aux[1]) &&
                        $metodo === $rota['metodo'])
                        return $this->chamada($rota['chamada'], $principal, $aux[2]);
                }
            }
            else if (preg_match("#^/{$principal}$#", $uri) &&
                     $metodo === $rota['metodo']) {
                if ($metodo === 'POST')
                    return $this->chamada($rota['chamada'], $rota['uri'], $_REQUEST);

                return $this->chamada($rota['chamada'], $rota['uri']);
            }
        }
        http_response_code(404);
//        include('pagina_404.php');
        die();
    }

    private function chamada($chamada, $nome, $parametros = null)
    {
        if (is_callable($chamada))
            return $chamada();

        $aux = explode("@", $chamada);
        if (count($aux) > 1) {
            $controller = new $aux[0]();
            $funcao = $aux[1];
            if ($parametros != null)
                return $controller->$funcao($parametros);

            return $controller->$funcao();
        }

        echo "Erro na configuração da Rota {$nome}.";
        die();
    }

}