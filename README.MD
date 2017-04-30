## Projeto MVC CRUD de Contatos

Este é um projeto simples em PHP utilizando da metodologia MVC mas sem o uso de frameworks e bibliotecas no backend.

### Requisitos

* PHP >= 5.6
* MySQL/MariaDB
* Composer
* NodeJS (opcional)
* NPM (opcional)

### Configuração

Antes de iniciar a instalação é necesário que seja feita uma configuração inicial.
Para isso, faça clone ou baixe o ZIP do projeto e na pasta do projeto acesse o arquivo `config/database.php`. Este arquivo contem todas as configurações referentes a conexão com o banco de dados, coloque os dados corretos do seu ambiente para continuar com a instalação.


### Instalação
Para instalar este projeto é muito simples. Basta seguir estes passos:

1. Abra o terminal.
2. Na pasta do projeto, pelo terminal execute `composer install`.
4. Opcional: Caso queira atualizar as bibliotecas de frontend, execute `npm i && npm run dev`
5. Execute `composer run`. Este comando irá executar o servidor bult-in do PHP.
6. Pronto, basta acessar `http://localhost:8000` para verificar o projeto em funcionamento.

### Funcionalidade

Este projeto contem um módulo funcional de CRUD de contatos, contendo portanto cadastro, edição, exclusão e listagem de dados pertinentes a contatos, telefones e endereços de e-mail.

### Comandos Disponiveis

O projeto conta com alguns comandos úteis disponiveis, são eles:

* `composer db_up`: Cria as tabelas do sistema no banco de dados.
* `composer db_down`: Dropa as tabelas do sistema no banco de dados.
* `composer make_seed`: Insere dados fake no sistema para já ter dados de teste.
* `composer run`: Executa a aplicação via PHP built-in server na porta 8000.
* `npm run dev`: Compila as bibliotecas e arquivos do frontend.

### Descrição e Ferramentas Utilizadas
 
 Para o backend foi utilizado um sistema de API de forma que rotas sejam expostas permitindo assim o seu consumo pelo frontend. O frontend por sua vez é completamente desacoplado do backend, apenas consumindo rotas via AJAX.
 
 Tecnologias Backend:
 
  * PHP
  * Composer
  * PSR-4
  * MySQL
  * MVC
  * Conceitos de SOLID
  * WebPack (compilador para frontend)
  * Laravel-Mix (transpiler para frontend)
  
  Tecnologias Frontend: 
  
  * HTML5
  * CSS3
  * ES6
  * Angular 1.6.4
  * jQuery
  * Bootstrap
  * Font-Awesome
  * Sweet Alerts
  
  ### Autor
  
  Jonathan Willian <jonathan.willian.tod@gmail.com>
  
  ### Licença
  
  The MIT License (MIT)
  
  Copyright (c) 2017 Jonathan Willian.
  
  Permission is hereby granted, free of charge, to any person obtaining a copy of
  this software and associated documentation files (the "Software"), to deal in
  the Software without restriction, including without limitation the rights to
  use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
  the Software, and to permit persons to whom the Software is furnished to do so,
  subject to the following conditions:
  
  The above copyright notice and this permission notice shall be included in all
  copies or substantial portions of the Software.
  
  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
  FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
  COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
  IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
  CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
  