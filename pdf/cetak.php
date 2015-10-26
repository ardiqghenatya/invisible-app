<?php
   include "../config/config.php";
   include "../pdf/fpdf/fpdf.php";
   //include "../barcode/barcode.php";
   //include "../barcode/bars.php";
    $pdf = new FPDF();
    $pdf->Open();
    $pdf->addPage();
    $pdf->setAutoPageBreak(true);
    $pdf->setFont('Arial','',12);
    $pdf->text(10,25,'Tes User DB');
    
    $pdf->Line(10,31,198,31);
    $yi = 50;
    $ya = 44;
    $pdf->setFont('Arial','',9);
    $pdf->setFillColor(222,222,222);
    $pdf->setXY(10,$ya);
    $pdf->CELL(6,6,'ID',1,0,'C',1);
    $pdf->CELL(40,6,'Username',1,0,'C',1);
    $pdf->CELL(50,6,'Password',1,0,'C',1);
    $ya = $yi + $row;
    $sql = "SELECT id, password, username FROM user";
                $result = $conn->query($sql);
    $i = 1;
    $no = 1;
    $max = 31;
    //$row = 6;
    if ($result->num_rows > 0) 
                    while($row = $result->fetch_assoc()) {
    $pdf->setXY(10,$ya);
    $pdf->setFont('arial','',9);
    $pdf->setFillColor(255,255,255);
    $pdf->cell(6,6,$row["id"],1,0,'C',1);
    $pdf->cell(40,6,$row["username"],1,0,'L',1);
    $pdf->cell(50,6,$row["password"],1,0,'L',1);
   
    //$ya = $ya+$row;
    //$no++;
    //$i++;
    //$dm[id] = $row[0];
    }
    $pdf->text(150,$ya+6,"Regards , ". date('d-M-Y'));
    $pdf->text(150,$ya+20,"ARC Digital");
    //$pdf->WriteHTML("This is a <img src='<img src="barcode.php?text='.$txt1.'" alt="testing">' test");
    $pdf->output();



    ?>
