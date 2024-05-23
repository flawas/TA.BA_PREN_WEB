<?php

require 'config.php';

$post = file('php://input');
$data = json_decode($post[0]);

$time = $data->time;
$energy = $data->energy;

$db_connect = mysqli_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME) or die(mysql_error());

$server_datetime = date("Y-m-d H:i:s");

mysqli_query($db_connect, "INSERT INTO `pren_web` (`id`, `datetime`, `time`, `energy`) VALUES (NULL, '$server_datetime', '$time', '$energy');");

if (WRITE_LOG == true) {
    file_put_contents('log.txt', $post[0] . PHP_EOL, FILE_APPEND);
}

?>