<?php

$file = file_get_contents('/var/www/html/.env.example');

$file = preg_replace('/DB_HOST=127.0.0.1/', 'DB_HOST=mysql', $file);
$file = preg_replace('/DB_DATABASE=homestead/', 'DB_DATABASE='.getenv('MYSQL_DATABASE'), $file);
$file = preg_replace('/DB_USERNAME=homestead/', 'DB_USERNAME='.getenv('MYSQL_USER'), $file);
$file = preg_replace('/DB_PASSWORD=secret/', 'DB_PASSWORD='.getenv('MYSQL_PASSWORD'), $file);

file_put_contents ('/var/www/html/.env', $file);

while(true)
{
    try
    {
        $dbh = new PDO('mysql:host=mysql;dbname=HarekazeCTF', getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'));
        $dbh = null;
        break;
    }
    catch (PDOException $e) { sleep(3); }

}
echo shell_exec('cd /var/www/html/ && php artisan key:generate');
echo shell_exec('cd /var/www/html/ && php artisan migrate');