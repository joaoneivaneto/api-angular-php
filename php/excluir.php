<?php
    include('./conexao.php');

   $idCurso= $_GET["idCurso"];

    $sql = "DELETE FROM cursos WHERE idCurso=$idCurso";
    mysqli_query($conexao,$sql);
    
