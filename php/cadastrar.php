<?php
    include('./conexao.php');

    $obterDados=file_get_contents("php://input");

    $extrair=json_decode($obterDados);
    
    $nomeCurso= $extrair->nomeCurso;
    $valorCurso= $extrair->valorCurso;
    $sql = "INSERT INTO cursos(nomeCurso,valorCurso) VALUES ('$nomeCurso', $valorCurso)";
    mysqli_query($conexao,$sql);
    $curso =[
        'nomeCurso' => $nomeCurso,
        'valorCurso' => $valorCurso
    ];

    
   
