<?php  
var_dump($_FILES);

echo $_FILES['meuArquivo']['name']."<br>";

echo $_FILES['meuArquivo']['tmp_name']."<br>";

$tmp = $_FILES['meuArquivo']['tmp_name'];
$name =  $_FILES['meuArquivo']['name'];

$pessoa = $_POST['onome'];
$cidade = $_POST['cidade'];
$data=date("(d.m.y) H:i");

$nomeFinal = $pessoa.'-'.$data.'-'.$cidade;
$path = pathinfo($name);
$ext = $path['extension'];

echo $nomeFinal.'.'.$ext;

$extPer = array("png","jpg","jpeg","PNG","gif","svg" );


if(in_array($ext,$extPer)){
move_uploaded_file($tmp,"files/".$nomeFinal.'.'.$ext);
echo"<br> brabo"; 
}else{
	echo"<br>TROQUE A EXTENSÃO IMEDIATAMENTE !!!";
}