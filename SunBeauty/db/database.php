<?php
try{
    $bdd = new PDO('mysql:host=localhost;port=3308;dbname=client;','root','');

}
catch(Exception $e){
    echo "connection failed";
}
?>