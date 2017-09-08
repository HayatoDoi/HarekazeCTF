<?php

$file = file_get_contents('/var/www/html/.env.example');

$file = preg_replace('/DB_HOST=127.0.0.1/', 'DB_HOST=mysql', $file);
$file = preg_replace('/DB_DATABASE=homestead/', 'DB_DATABASE=HarekazeCTF', $file);
$file = preg_replace('/DB_USERNAME=homestead/', 'DB_USERNAME=${MYSQL_USER}', $file);
$file = preg_replace('/DB_PASSWORD=secret/', 'DB_DATABASE=${MYSQL_PASSWORD}', $file);

file_put_contents ('/var/www/html/.env', $file);

echo shell_exec('cd /var/www/html/ && php artisan key:generate');
echo shell_exec('cd /var/www/html/ && artisan migrate');