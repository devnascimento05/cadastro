<?php
$hostdb = 'localhost';
$userdb = 'root';
$passdb = '';
$bd = 'concultorio';

$con = new mysqli($hostdb,$userdb,$passdb,$bd);

if($con->connect_error){
    echo "Erro de conexão: " . $con->connect_error;
}
?>