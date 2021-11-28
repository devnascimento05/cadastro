<?php

include 'conexao.php';

$codd = $_POST["txt_cd"];
$coddi = $_POST["txt_nome"];
$coddisc = $_POST["txt_idade"];
$nomedis = $_POST["txt_esp"];
$nasc = $_POST["txt_cpf"];
$end = $_POST["txt_cidade"];



$stms = $con->prepare("INSERT INTO medicos(CODM,NOME,IDADE,ESPECIALIDADE,CPF,CIDADE) VALUES (?,?,?,?,?,?)");

$stms->bind_param('ssssss', $codd, $coddi, $coddisc, $nomedis, $nasc, $end);

$stms->execute();

echo "Erro de sentença: %s.\n" . $stms->error;

$stms->close();


echo "<br>";
echo "<p align='center'>Inclusão efetuada com sucesso!!!</p>";
echo "<br>";
echo "<p align='center'><a href='index.html'>Volta</a></p>";
echo "<br>";

?>