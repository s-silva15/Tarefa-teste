# Projeto atividade-teste

Este é um projeto em PHP/Laravel que utiliza o Composer como gerenciador de
dependências e o Mariadb/MySQL como banco de dados como uma atividade teste.
## Requisitos

Certifique-se de ter os seguintes requisitos instalados em sua máquina:

- PHP (8.2.5)
- Composer (2.5.5)
- MariaDB(15.1) e um banco de dados configurado e funcional 

## Instalação

1. cd atividade-teste
2. composer install
3. configure o arquivo .env com os dados referentes à conexão com o banco de dados
4. php artisan key:generate
5. php artisan migrate
6. php artisan serve

