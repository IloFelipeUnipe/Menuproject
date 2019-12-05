<?php
  function getConnection(){
        
    $conexao = mysqli_connect("localhost","root","","artefatosdb");
  
    return $conexao;
}
?>