# SF Formation  

Here are instructions to have a skeleton for the Symfony formation with :  
* a PHP 7.2 container with xdebug and pdo_mysql
* a NGINX 1.13.3 container
* a MYSQL 5.7.21 db container
* a PHPMyAdmin 4.6.6 container
* a PHPLiteAdmin container

#### Clone the repo
```
git clone https://github.com/raphaelvoisin/sf-formation.git
cd sf-formation
```
#### Create your .env file
```
cp .env.dist .env
# + Edit the .env -> Editing the `LOCAL_PROJECT_PATH` should be enough
```

#### Config you /etc/hosts
Add in it:
`127.0.0.1 pg-sf.com`

#### Install Symfony 4 using composer
```
composer create-project symfony/website-skeleton symfony
```

#### Copy test files
```
cp TestController.php symfony/src/Controller/
cp routes.yaml symfony/config/
```

#### Start docker container
```
docker-compose up
```

#### Test
You should access to `http://pg-sf.com/test` and see the message "OK, Symfony is installed"
  
PhpMyAdmin should be ready with credential root/root on `http://127.0.0.1:8080/`
  
PhpLiteAdmin should be ready on `http://127.0.0.1:2015/phpliteadmin.php`  
-> you will just have an error saying you have no database, this is OK

#### Clean
```
rm symfony/src/Controller/TestController.php
# + edit symfony/config/routes.yaml and remove the route manually
```