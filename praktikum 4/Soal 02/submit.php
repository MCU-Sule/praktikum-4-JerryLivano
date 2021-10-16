<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Jerry Livano 2172002">
    <title>submit</title>
</head>
<body>

<table bgcolor='black' align='center' border='1' cellpadding='0' cellspacing='0'>
    <tr>
       <td colspan='2' align='center' bgcolor='#9ACD32'>Kalkulator</td>
    </tr>

    <tr>
       <td bgcolor='#008000'>Angka pertama</td>
       <?php
       echo "<td width='130' align='center' bgcolor='white'>$_GET[angka1]</td>";
       ?>
    </tr>

    <tr>
       <td bgcolor='#008000'>Angka kedua</td>
       <?php
       echo "<td width='130' align='center' bgcolor='white'>$_GET[angka2]</td>";
       ?>
    </tr>

    <tr>
       <td bgcolor='#008000'>Operator</td>
       <?php
       echo "<td width='130' align='center' bgcolor='white'>$_GET[op]</td>";
       ?>
    </tr>

    <tr>
       <td colspan='2' align='center' bgcolor='#9ACD32'>
           Hasil = <?php
    $angka1 = $_GET["angka1"];
    $angka2 = $_GET["angka2"];
    $operator = $_GET["op"];

    if ($operator == "+") {
        echo $angka1+$angka2;
    } elseif ($operator == "-") {
        echo $angka1-$angka2;
    } elseif ($operator == "*") {
        echo $angka1*$angka2;
    } elseif ($operator == "/") {
        echo $angka1/$angka2;
    }
?>
       </td>
    </tr>
</table>
    
</body>
</html>