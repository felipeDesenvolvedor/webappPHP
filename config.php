<?php

$mysql = new mysqli('localhost', 'webapp', '6AlM9ReiMPIywdzV', 'blog');
$mysql->set_charset('utf8');

if($mysql == false) {
    echo 'erro de conexao';
}