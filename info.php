<?php
if(!empty($_POST)){
require_once 'class-db.php';

foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value, ENT_QUOTES,"UTF-8");
}



$db = new DB();

$db-> input_data($_POST["name"],$_POST["last"],$_POST["age"]);
}else{
	echo "access denied";
}
