<?php

    
    $mysqli = new mysqli("localhost", "root", "", "sistema_escolar");
    require "plantilla.php";
    $sql = "SELECT *  FROM period";
    $resultado = $mysqli->query($sql);

    $pdf = new PDF("P", "mm", "letter");
    $pdf->AliasNbPages();
    $pdf->SetMargins(10, 10, 10);
    $pdf->AddPage();

    $pdf->SetFont("Arial", "B", 9);


    $pdf->Cell(10, 5, "Número", 1, 0, "C");
    $pdf->Cell(40, 5, "Nombre", 1, 0, "C");
    $pdf->Cell(20, 5, "Inicio", 1, 0, "C");
    $pdf->Cell(20, 5, "Fin", 1, 0, "C");


    $pdf->SetFont("Arial", "", 9);

    while ($fila = $resultado->fetch_assoc()) {
        $pdf->Cell(10, 5, $fila['numperi'], 1, 0, "C");
        $pdf->Cell(40, 5, utf8_decode($fila['nomperi']), 1, 0, "C");
        $pdf->Cell(20, 5, $fila['starperi'], 1, 0, "C");
        $pdf->Cell(20, 5, $fila['endperi'], 1, 0, "C");
    }

    $pdf->Output();
