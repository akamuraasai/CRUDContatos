<?php

namespace App\Database\Seeders;

use App\Kernel\Database;

class BaseSeed extends Database
{
    private $nomes = [
        'Aaron', 'Adriano', 'Alan', 'Alexandre', 'Alonso', 'Anderson', 'Andres', 'Antonio', 'Benjamin', 'Bruno', 'Camilo', 'Carlos', 'Christian',
        'Christopher', 'Daniel', 'Dante', 'David', 'Diego', 'Eduardo', 'Elias', 'Emanuel', 'Emiliano', 'Emilio', 'Estevan',
        'Evandro', 'Everton', 'Felipe', 'Fernando', 'Francisco', 'Franco', 'Fabio', 'Gabriel', 'Gian', 'Guilherme', 'Gustavo', 'Henrique',
        'Hernani', 'Horacio', 'Hugo', 'Ian', 'Inacio', 'Isaac', 'Ivan', 'Jeronimo', 'Joaquin', 'Jorge', 'Josue', 'Jose',
        'Kevin', 'Leandro', 'Leonardo', 'Lucas', 'Luciano', 'Luis', 'Manuel', 'Mateus', 'Matias', 'Miguel', 'Mario',
        'Maximo', 'Noel', 'Pablo', 'Paulo', 'Pedro', 'Rafael', 'Ricardo', 'Rodrigo', 'Samuel', 'Santiago', 'Simon', 'Sergio',
        'Thales', 'Thiago', 'Tomas', 'Valentin', 'Vicente', 'Agostinho', 'Demian', 'Giovane', 'Jacomo', 'Martinho', 'Maximiano', 'Natal',
        'Teobaldo', 'Ziraldo', 'Abril', 'Adriana', 'Agustina', 'Alessandra', 'Alexa', 'Allison', 'Alma', 'Amanda', 'Amelia',
        'Ana', 'Andrea', 'Antonieta', 'Ariadna', 'Ariana', 'Ashley', 'Beatriz', 'Bianca', 'Camila', 'Carla', 'Carolina', 'Catarina',
        'Clara', 'Daniela', 'Elizabeth', 'Emília', 'Fabiana', 'Fátima', 'Gabriela', 'Giovana', 'Helena', 'Irene', 'Isabel', 'Isabella',
        'Isadora', 'Ivana', 'Jasmin', 'Joana', 'Josefina', 'Juliana', 'Julieta', 'Julia', 'Ketlin', 'Laura', 'Luana', 'Luara', 'Luciana', 'Luna',
        'Luzia', 'Madalena', 'Maite', 'Malena', 'Manuela', 'Mariana', 'Mel', 'Melissa', 'Mia', 'Micaela', 'Michele', 'Miranda', 'Natalia', 'Nicole',
        'Noeli', 'Norma', 'Nadia', 'Olivia', 'Ornela', 'Paula', 'Paulina', 'Pamela', 'Rafaela', 'Rebeca', 'Regina', 'Renata',
        'Sabrina', 'Samanta', 'Sara', 'Silvana', 'Sofia', 'Sophie', 'Suzana', 'Tais', 'Tabata', 'Valentina', 'Valeria',
        'Violeta', 'Vitoria', 'Abgail', 'Constancia', 'Hortencia', 'Tessalia', 'Thalissa'
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
                $retorno[] = $this->nomes[mt_rand(0, count($this->nomes) -1)] . ' ' . $this->sobrenomes[mt_rand(0, count($this->sobrenomes) -1)];

            else if ($tipo === 'num2')
                $retorno[] = mt_rand(1, 2);

            else if ($tipo === 'id')
                $retorno[] = mt_rand(1, 15);

            else if ($tipo === 'email')
                $retorno[] = strtolower($this->nomes[mt_rand(0, count($this->nomes) -1)]) . '@mail.com.br';
        }

        return $retorno;
    }

    static public function make_seed()
    {
        $contatos = new ContatoSeeder();
        $emails = new EmailSeeder();

        $contatos->contato_seed();
        $emails->email_seed();
    }
}