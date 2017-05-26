<?php
//estaba debajo de la definicion URL
define('LIBS','libs/'); 

//variables cuando uso localhost
define('URL','http://localhost/hoteleriaTurismo/');
define('DB_TYPE','mysql');
define('DB_HOST','localhost');
define('DB_NAME','bd_hoteleriaTurismo');
define('DB_USER','root');
define('DB_PASS','');

/*No cambiar la hash_key porque es la clave del password*/
define('HASH_GENERAL_KEY','hoteleriaTurismo');

/*ESTE ES PARA LA BASE DE DATOS SOLAMENTE*/
define('HASH_PASSWORD_KEY','hoteleriaTurismo');
?>
