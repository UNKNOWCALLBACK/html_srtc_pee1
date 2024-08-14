<?php
require "database.php" ;
if ($_POST) {
 $username = $_POST["username"];
 $id = $_POST["id"];
echo "hello $username $id";
}
?>