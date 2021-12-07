# CakePHP 4.3.1 docekr-compose 開発用

## Installation

```
# コンテナ起動
$ cd ~/cake_docker
$ docker-compose up
$ docker exec -it cake_app composer install

...
PHP CodeSniffer Config installed_paths set to ../../cakephp/cakephp-codesniffer,../../slevomat/coding-standard
> App\Console\Installer::postInstall
Created `config/app_local.php` file
Created `/work/backend/logs` directory
Created `/work/backend/tmp` directory
Created `/work/backend/tmp/cache` directory
Created `/work/backend/tmp/cache/models` directory
Created `/work/backend/tmp/cache/persistent` directory
Created `/work/backend/tmp/cache/views` directory
Created `/work/backend/tmp/sessions` directory
Created `/work/backend/tmp/tests` directory
Set Folder Permissions ? (Default to Y) [Y,n]? Y
...

```

cakePHP
http://localhost:8080/

phpmyadmin
http://localhost:8081/

## Commands

composer
```
$ docker exec -it cake_app composer
```
bake
```
$ docker exec -it cake_app cake bake
```

## Error

```
Warning: require(/work/backend/vendor/autoload.php): failed to open stream: No such file or directory in /work/backend/webroot/index.php on line 31

Fatal error: require(): Failed opening required '/work/backend/vendor/autoload.php' (include_path='.:/usr/local/lib/php') in /work/backend/webroot/index.php on line 31
```
### 解決策
$ composeｒ install

## varsions
 php 7.3
 
  L composer:2.0
  
 mysql 5.6
