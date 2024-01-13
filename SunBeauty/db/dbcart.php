<?php
try{
    $bdd = new PDO('mysql:host=localhost;port=3308;dbname=cart;','root','');

}
catch(Exception $e){
    echo "connection failed";
}
?>