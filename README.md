### Requisitos:
- PHP
- Laravel
- MySql
- Baixe o APP (https://github.com/rgoudinho/quadro-vagas-app)

### Dowload 
Faça o clone da API:

\$ `git clone git@github.com:rgoudinho/quadro-vagas-api.git`

### Como configurar e rodar:

Crie a base de dados no MySql: 

\> `CREATE DATABASE job_board;`

configure o banco com os dados do banco no arquivo .env

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=job_board
DB_USERNAME=fulano
DB_PASSWORD=********
```

execute o seguinte comando para criar as tabelas no banco:

\$ `php artisan migrate`

rode a API:

\$ `php artisan serve`
