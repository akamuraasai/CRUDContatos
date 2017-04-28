<?php

namespace App\Database\Seeders;

use App\Kernel\Database;

class BaseSeed extends Database
{
    private $nomes = [
        'Aaron', 'Adriano', 'Alan', 'Alexandre', 'Alonso', 'Anderson', 'Andres', 'Antônio', 'Benjamin', 'Bruno', 'Camilo', 'Carlos', 'Christian',
        'Christopher', 'Cristóvão', 'Daniel', 'Dante', 'David', 'Diego', 'Eduardo', 'Elias', 'Emanuel', 'Emiliano', 'Emílio', 'Estêvão',
        'Evandro', 'Everton', 'Felipe', 'Fernando', 'Francisco', 'Franco', 'Fábio', 'Gabriel', 'Gian', 'Guilherme', 'Gustavo', 'Henrique',
        'Hernani', 'Horácio', 'Hugo', 'Ian', 'Inácio', 'Isaac', 'Ivan', 'Jerônimo', 'Joaquin', 'Jorge', 'Josué', 'José',
        'João', 'Kevin', 'Leandro', 'Leonardo', 'Lucas', 'Luciano', 'Luis', 'Manuel', 'Mateus', 'Matias', 'Miguel', 'Mário',
        'Máximo', 'Noel', 'Pablo', 'Paulo', 'Pedro', 'Rafael', 'Ricardo', 'Rodrigo', 'Samuel', 'Santiago', 'Simon', 'Sérgio',
        'Thales', 'Thiago', 'Tomás', 'Valentin', 'Vicente', 'Agostinho', 'Demian', 'Giovane', 'Jácomo', 'Martinho', 'Maximiano', 'Natal', 'Sebastião',
        'Simão', 'Teobaldo', 'Ziraldo', 'Abril', 'Adriana', 'Agustina', 'Alessandra', 'Alexa', 'Allison', 'Alma', 'Amanda', 'Amélia',
        'Ana', 'Andrea', 'Antonieta', 'Ariadna', 'Ariana', 'Ashley', 'Beatriz', 'Bianca', 'Camila', 'Carla', 'Carolina', 'Catarina',
        'Clara', 'Daniela', 'Elizabeth', 'Emília', 'Fabiana', 'Fátima', 'Gabriela', 'Giovana', 'Helena', 'Irene', 'Isabel', 'Isabella',
        'Isadora', 'Ivana', 'Jasmin', 'Joana', 'Josefina', 'Juliana', 'Julieta', 'Júlia', 'Ketlin', 'Laura', 'Luana', 'Luara', 'Luciana', 'Luna',
        'Luzia', 'Madalena', 'Maitê', 'Malena', 'Manuela', 'Mariana', 'Mel', 'Melissa', 'Mia', 'Micaela', 'Michele', 'Miranda', 'Natália', 'Nicole',
        'Noelí', 'Norma', 'Nádia', 'Olívia', 'Ornela', 'Paula', 'Paulina', 'Pâmela', 'Rafaela', 'Rebeca', 'Regina', 'Renata',
        'Sabrina', 'Salomé', 'Samanta', 'Sara', 'Silvana', 'Sofia', 'Sophie', 'Suzana', 'Taís', 'Tábata', 'Valentina', 'Valéria',
        'Violeta', 'Vitória', 'Abgail', 'Constância', 'Hortência', 'Tessália', 'Thalissa'
    ];

    private $sobrenomes = [
        'Abreu', 'Azevedo', 'Aguiar', 'Aragão', 'Assunção', 'Aranda', 'Ávila',
        'Balestero', 'Barreto', 'Barros', 'Batista', 'Bezerra', 'Beltrão',
        'Benites', 'Bittencourt', 'Branco', 'Bonilha', 'Brito', 'Burgos',
        'Caldeira', 'Camacho', 'Campos', 'Carmona', 'Carrara', 'Casanova',
        'Chaves', 'Cervantes', 'Colaço', 'Cordeiro', 'Corona', 'Correia',
        'Cortês', 'Cruz', 'D\'ávila', 'Delatorre', 'Delgado', 'Delvalle',
        'Dias', 'Domingues', 'Dominato', 'Duarte', 'Escobar', 'Espinoza',
        'Esteves', 'Estrada', 'Faria', 'Faro', 'Feliciano', 'Ferminiano',
        'Fernandes', 'Ferraz', 'Ferreira', 'Fidalgo', 'Furtado',
        'Ferreira', 'Flores', 'Fonseca', 'Franco', 'Fontes', 'Galindo',
        'Galhardo', 'Galvão', 'Garcia', 'Gil', 'Godói', 'Gomes', 'Gonçalves',
        'Grego', 'Guerra', 'Gusmão', 'Jimenes', 'Leal', 'Leon', 'Lira',
        'Lovato', 'Lozano', 'Lutero', 'Madeira', 'Maldonado', 'Marés', 'Marin',
        'Marinho', 'Marques', 'Martines', 'Mascarenhas', 'Matias', 'Matos',
        'Maia', 'Medina', 'Meireles', 'Mendes', 'Mendonça', 'Molina',
        'Montenegro', 'Neves', 'Oliveira', 'Ortega', 'Ortiz', 'Quintana',
        'Queirós',  'Pacheco', 'Padilha', 'Padrão', 'Paes', 'Paz', 'Pedrosa',
        'Pena', 'Pereira', 'Perez', 'Prado', 'Pontes', 'Quintana', 'Queirós',
        'Ramires', 'Ramos', 'Rangel', 'Rezende', 'Reis', 'Rico', 'Rios',
        'Rivera', 'Rocha', 'Rodrigues', 'Romero', 'Roque', 'Rosa', 'Salas',
        'Salazar', 'Sales', 'Salgado', 'Sanches', 'Sandoval', 'Santacruz',
        'Santana', 'Santiago', 'Saraiva', 'Sepúlveda', 'Serna', 'Serra',
        'Serrano', 'Soares', 'Solano', 'Soto', 'Tamoio', 'Teles', 'Toledo',
        'Torres', 'Uchoa', 'Urias', 'Valdez', 'Valência', 'Valentin', 'Vale',
        'Vasques', 'Vega', 'Velasques', 'Verdugo', 'Verdara', 'Vieira', 'Vila',
        'Zamana', 'Zambrano', 'Zaragoça', 'da Cruz', 'da Rosa', 'da Silva',
        'das Dores', 'das Neves', 'de Aguiar', 'de Oliveira', 'de Souza'
    ];

    public function seed($quantidade = 10, $campos, $parametros, $tipos, $texto)
    {
        for ($i = 0; $i < $quantidade; $i++) {
            $valores = $this->valores_fake($tipos);
            $resultado = $this->inserir($campos, $parametros, $valores) ?
                         'Contato cadastrado com sucesso.' :
                         'Erro ao cadastrar contato.';
            echo "\e[0;32m{$texto} {$valores[0]}: {$resultado}\e[0m\n";
        }
    }

    private function valores_fake($tipos)
    {
        $retorno = [];
        foreach ($tipos as $tipo) {
            if ($tipo === 'nome')
                $retorno[] = $this->nomes[mt_rand(0, count($this->nomes))] . ' ' . $this->sobrenomes[mt_rand(0, count($this->sobrenomes))];
        }

        return $retorno;
    }

    static public function make_seed()
    {
        $contatos = new ContatoSeeder();

        $contatos->contato_seed();
    }
}