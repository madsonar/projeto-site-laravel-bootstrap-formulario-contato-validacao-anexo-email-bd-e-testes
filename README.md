# Projeto Site com Laravel 6, bootstrap e React

## Funcionalidades 

* Formulário de contato com envio de anexo, validação de dados, envio de email, cadastro em banco de dados SQLite e caso testes para verificar disponibilidade do recurso.

* Sistema de login, cadastro de usuários e recurperação de senha por e-mail.

* Envio de e-mail com Drive do Gmail da Google.

###### Requisitos: 
    - PHP >= 7.2.0
    - composer    
    - Node
    - Git
    - Laravel 6.x

#### Passos para rodar o projeto:

* Realizar git clone do projeto:

    $ git clone git@github.com:madsonar/projeto-site-laravel-bootstrap-formulario-contato-validacao-anexo-email-bd-e-testes.git

* Entrar no diretório do projeto/web-app:

    $ cd projeto-site-laravel-bootstrap-formulario-contato-validacao-anexo-email-bd-e-testes/
    $ cd web-app/    

* Instalar dependências via composer

    $ composer install

* Instalar dependências JS/Node com npm e compilar com o empacotador Webpack

    $ npm install && npm run dev

* Criar o arquivo de configuração .env para variáveis de ambiente copiando o arquivo .env.example:

    $ cp .env.example .env

* Gerar chave de segurança da aplicação:

    $ php artisan key:generate

* Criar arquivo banco SQLite:

    $ touch database/database.sqlite

* Configurar banco SQLite no arquivo .env:

    Comentar linhas:
    
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=

    Inserir linha:
    DB_CONNECTION=sqlite

    Obs: Deve ser habilitado o SQlite no PHP.ini

* Rodando migrate para criar as tabelas necessárias no banco de dados

    $ php artisan migrate

* Configurar envio de e-mail para usar Drive Gmail da Google

    Obs: No arquivo .env substituir comentar linhas:
    MAIL_DRIVER=smtp
    MAIL_HOST=smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=null
    MAIL_PASSWORD=null
    MAIL_ENCRYPTION=null
    MAIL_FROM_ADDRESS=null
    MAIL_FROM_NAME="${APP_NAME}"

    Inserir linhas abaixo informando seu e-mail e senha do Gmail.
    MAIL_DRIVER=smtp
    MAIL_HOST=smtp.gmail.com
    MAIL_PORT=587
    MAIL_USERNAME=
    MAIL_PASSWORD=
    MAIL_ENCRYPTION=tls

    Obs: No Gmail deve ser ativado a configuração 'Acesso a app menos seguro'

* Rodando um caso de teste para verificar a disponibilidade da funcionalidade:

    $ ./vendor/bin/phpunit

* Rodando a aplicação para verificar se todas a configurações estão ok.

    $ php artisan serve



