<?php
    include('./conexao.php');

    $obterDados=file_get_contents("php://input");
    
    $extrair=json_decode($obterDados);
    
    $idCurso= $extrair->idCurso;
    $nomeCurso= $extrair->nomeCurso;
    $valorCurso= $extrair->valorCurso;
    
    $sql = "UPDATE cursos SET nomeCurso=$nomeCurso, valorCurso=$valorCurso where idCurso=$idCurso";
    mysqli_query($conexao,$sql);
    $curso =[
        'idCurso' => $idCurso,
        'nomeCurso' => $nomeCurso,
        'valorCurso' => $valorCurso
    ];
  
    
    