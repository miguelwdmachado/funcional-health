# funcional-health

Preparação do ambiente do laradock:

Após a clonagem deste repositório, iniciar uma sessão de terminal e proceder com os seguintes comandos:

cd laradock

docker-compose build ou sudo docker-compose build (se não conseguir executar como usuário comum)

docker-compose up -d

sudo docker-compose exec --user=laradock workspace bash

cd challenge

composer install
composer update

== Preparação da base de dados ==

acessar o phpmyadmin via browser o seguinte endereço: localhost:8081
colocar os seguintes parâmetros:
servidor: laradock_mysql_1
usuário: root
senha: root

criar uma nova base de dados com o nome "challenge" (utf8mb4_unicode_ci)

após a criação, proceder com a migração da base de dados.

php artisan migrate

php artisan db:seed

Para listar as rotas da api, digite o seguinte comando:

php artisan route:list

Para verificar se a api está funcionando, acesse no browse o seguinte endereço: localhost

Para realizar os testes na api, indicamos o aplicativo Postman.

Já existe uma collection pronta para esses testes, para acessá-la acesse o seguinte link:

https://www.getpostman.com/collections/42176b12be77f9ea6bd7

Também existe um arquivo com toda a documentação de teste executada no Postman na pasta challenge com
o seguinte nome: Challenge.postman_collection.json

================================= Fim ================================
