<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    
    <?php
    $ile1 = $_POST["ile1"];
    $ile2 = $_POST["ile2"];
    $ile3 = $_POST["ile3"];
    $ile4 = $_POST["ile4"];
    $ile5 = $_POST["ile5"];
    $ile6 = $_POST["ile6"];
    if($ile1 == ""){
        $ile1 = 0;
    }
    if($ile2 == ""){
        $ile2 = 0;
    }
    if($ile3 == ""){
        $ile3 = 0;
    }
    if($ile4 == ""){
        $ile4 = 0;
    }
    if($ile5 == ""){
        $ile5 = 0;
    }
    if($ile6 == ""){
        $ile6 = 0;
    }
    $czas = time();
    $cena1 = sprintf('%.2f',$ile1 * 1.20, 2);
    $vat1 =  sprintf('%.2f',$cena1 * 1.23 - $cena1);
    $brutto1 = sprintf('%.2f',$cena1 * 1.23);
    $cena2 = sprintf('%.2f',$ile2 * 1);
    $vat2 =  sprintf('%.2f',$cena2 * 1.23 - $cena2);
    $brutto2 = sprintf('%.2f',$cena2 * 1.23);
    $cena3 = sprintf('%.2f',$ile3 * 1.50);
    $vat3 =  sprintf('%.2f',$cena3 * 1.23 - $cena3);
    $brutto3 = sprintf('%.2f',$cena3 * 1.23);
    $cena4 = sprintf('%.2f',$ile4 * 0.50);
    $vat4 =  sprintf('%.2f',$cena4 * 1.23 - $cena4);
    $brutto4 = sprintf('%.2f',$cena4 * 1.23);
    $cena5 = sprintf('%.2f',$ile5 * 2);
    $vat5 =  sprintf('%.2f',$cena5 * 1.23 - $cena5);
    $brutto5 = sprintf('%.2f',$cena5 * 1.23);
    $cena6 = sprintf('%.2f',$ile6 * 2.50);
    $vat6 =  sprintf('%.2f',$cena6 * 1.23 - $cena6);
    $brutto6 = sprintf('%.2f',$cena6 * 1.23);
    $razem = sprintf('%.2f',$cena1 + $cena2 + $cena3 + $cena4 + $cena5 + $cena6);
    $czyPromocja = $_POST["promo"];
    $cenaPoPromce = sprintf('%.2f',$razem*0.95);
    $zaoszczedzone = sprintf('%.2f',$razem - $cenaPoPromce);
   ?>
   <?php
   echo '<div id="data">';
   echo 'Data zakupu<br>';
   echo date("m.d.y", $czas);
   echo '</div>';
   echo '<div style="width:100%; display:flex; flex-direction: column ; align-items: center;">';
   echo '<h3>Podsumowanie:</h3>';
   echo '<div id="tabelka">';
   echo '<table style="border: 1px solid black; border-collapse: collapse;">';
   echo '<tr style="border: 1px solid black;">';
   echo '<th>L.p</th>';
   echo '<th style="border: 1px solid black;">Nazwa</th>';
   echo '<th style="border: 1px solid black;">Ilość</th>';
   echo '<th style="border: 1px solid black;">Cena <br> netto</th>';
   echo '<th style="border: 1px solid black;">Wartość<br> netto</th>';
   echo '<th style="border: 1px solid black;">Vat</th>';
   echo '<th style="border: 1px solid black;">Wartość<br> Vat</th>';
   echo '<th style="border: 1px solid black;">Wartość<br>brutto</th>';
   echo '</tr>';
   echo '<tr style="border: 1px solid black;">';
   echo '<td style="border: 1px solid black;">1</td>';
   echo '<td style="border: 1px solid black;">';
   echo '<b>trans</b>ystorki';
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo $ile1;
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo '1,20';
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo $cena1;
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo '23%';
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo $vat1;;
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo $brutto1;
   echo '</tr>';
   echo '<tr style="border: 1px solid black;">';
   echo '<td style="border: 1px solid black;">2</td>';
   echo '<td style="border: 1px solid black;">';
   echo 'rezystorki';
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo $ile2;
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo '1,00';
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo $cena2;
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo '23%';
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo $vat2;;
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo $brutto2;
   echo '</tr>';
   echo '<tr style="border: 1px solid black;">';
   echo '<td style="border: 1px solid black;">3</td>';
   echo '<td style="border: 1px solid black;">';
   echo 'diody RGB';
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo $ile3;
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo '1,50';
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo $cena3;
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo '23%';
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo $vat3;
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo $brutto3;
   echo '</tr>';
   echo '<tr style="border: 1px solid black;">';
   echo '<td style="border: 1px solid black;">4</td>';
   echo '<td style="border: 1px solid black;">';
   echo 'kable';
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo $ile4;
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo '0,50';
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo $cena4;
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo '23%';
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo $vat4;;
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo $brutto4;
   echo '</tr>';
   echo '<tr style="border: 1px solid black;">';
   echo '<td style="border: 1px solid black;">5</td>';
   echo '<td style="border: 1px solid black;">';
   echo 'brzeczyki';
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo $ile5;
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo '2,00';
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo $cena5;
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo '23%';
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo $vat5;;
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo $brutto5;
   echo '</tr>';
   echo '<tr style="border: 1px solid black;">';
   echo '<td style="border: 1px solid black;">6</td>';
   echo '<td style="border: 1px solid black;">';
   echo 'przyciski';
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo $ile6;
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo '2,50';
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo $cena6;
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo '23%';
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo $vat6;
   echo '</td>';
   echo '<td style="border: 1px solid black;">';
   echo $brutto6;
   echo '</tr>';
   echo '</table>';
   echo '</div>';
   echo '<h3>Razem:  '.$razem.' zł'.'</h3>';
   if($czyPromocja == "abc")
   {
    echo '<h3>Razem:  '.$cenaPoPromce.' zł, korzystając z promocji zaoszczędziłeś '.$zaoszczedzone.' zł</h3>';
   }
   else 
   {
    echo '<h3>Razem:  '.$razem.' zł'.'</h3>';
   }
   echo '</div>';
   echo '<hr>';
   echo '<div style="width: 100%; display: flex; justify-content: center;">';
   echo '<h3>Dziękujemy za zakupy!!</h3>';
   echo '</div>';
   ?>
   
</body>
</html>