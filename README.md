# manage-app-api
Gerenciar aplicativos vinculados a pessoas.

Pré requisitos MySql, PHP e Composer.
Projeto feito em Laravel 5.7 com PHP 7.

Instalação
Baixe ou clone o projeto.
Crie o banco de dados MySql.
Configuro o arquivo .env com a conexão do banco

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=manageappdb
DB_USERNAME=manageappdb 
DB_PASSWORD=manageappdb

Abra o diretorio e execute o comando 'composer install'.
Feito a instalação das dependencias execute o comando 'php artisan migrate';
Criado o as tabelas execute o comando 'php artisan db:seed';
Para rodar a aplicação execute o comando 'php artisan serve'.
