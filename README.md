# crud-books
CRUD de livros em PHP, com Laravel e Docker\
\
Siga as instruções abaixo para acessar.\
\
Antes de tudo, você deve ter o Composer e o Docker previamente instalados.\
\
Clone esse repositório em seu computador:
```sh
git clone https://github.com/daniortlepp/crud-books.git
```

Acesse o diretório da API
```sh
cd crud-books
```

Instale as dependências
```sh
composer install
```

Crie um arquivo .env com a seguinte configuração (lembrando de alterar o DB_USERNAME e DB_PASSWORD conforme usuário e senha do seu MySQL):
```sh
APP_NAME="CRUD Books"
APP_ENV=local
APP_KEY=base64:iJXzkda9/rtjQM44VahiDo7Tape7peMkt4OOeAMYfwY=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=crud_books
DB_USERNAME=username
DB_PASSWORD=password

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DRIVER=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

```

Acesse o diretório do Docker:
```sh
cd laradock
```

Primeiro, precisamos subir os serviços que vamos utilizar:
```sh
docker-compose up -d nginx mysql
```

Acessar o container do MySQL:
```sh
docker-compose exec mysql bash
```

Acessar o MySQL:
```sh
mysql -u root -p
```

Digitar a senha do MySQL.

Criar a base de dados da nossa aplicação:
```sh
create database crud_books;
```

O comando abaixo não é obrigatório, é somente para confirmar que a base foi criada corretamente. Se sim, vai aparecer crud_books na lista:
```sh
show databases;
```

Sair do MySQL e do container:
```sh
exit
exit
```

Acessar o container workspace para rodar comandos do PHP e Composer:
```sh
docker-compose exec workspace bash
```

Criar as tabelas na base de dados:
```sh
php artisan migrate
```

Sair do container:
```sh
exit
```

A aplicação está pronta para você acessar através da URL http://localhost:8989
