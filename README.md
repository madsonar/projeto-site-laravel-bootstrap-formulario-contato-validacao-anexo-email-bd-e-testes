# Projeto Site com Laravel 6, bootstrap e React

## Funcionalidades 

* Formulário de contato com envio de anexo, validação de dados, envio de email, cadastro em banco de dados SQLite e caso testes para verificar disponibilidade do recurso.

* Sistema de login, cadastro de usuários e recurperação de senha por e-mail.

###### Requisitos: 
    - PHP >= 7.2.0
    - composer
    - Laravel 6.x
    - Node
    - Git
    - React
    - Bootstrap

#### Passos para rodar o projeto:

* Realizar git clone do projeto:

    $ git clone git@github.com:madsonar/projeto-site-laravel-bootstrap-formulario-contato-validacao-anexo-email-bd-e-testes.git

* Entrar no diretório do projeto:
    $ cd web-app/

* Instalar dependencias do composer

    $ composer install

* Instalar dependencias JS/Node com npm e compilar com empacotador Webpack

    $ npm install && npm run dev

* Criar o arquivo de configuração .env de variáveis de ambiente .env copiando o arquivo .env.example:

    $ cp .env.example .env

* Gerar chave de segurança da aplicação:

    $ php artisan key:generate

* Criar arquivo banco SQLite:

    $ touch database/database.sqlite

* Configurar banco SQLite no arquivo .env:

    Comentar linhas:
    

