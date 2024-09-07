<?php
    include('./conexao.php');

    $obterDados=file_get_contents("php://input");

    $extrair=json_decode($obterDados);
    
    $idCurso= $extrair->cursos->idCurso;
    $nomeCurso= $extrair->cursos->nomeCurso;
    $valorCurso= $extrair->cursos->valorCurso;
    $sql = "UPDATE cursos SET nomeCurso=$nomeCurso, valorCurso=$valorCurso where idCurso=$idCurso";
    mysqli_query($conexao,$sql);
    $curso =[
        'idCurso' => $idCurso,
        'nomeCurso' => $nomeCurso,
        'valorCurso' => $valorCurso
    ];

    json_encode(['curso' => $curso]);
    var_dump($curso);