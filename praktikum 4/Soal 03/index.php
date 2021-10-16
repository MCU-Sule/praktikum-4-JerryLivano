<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Jerry Livano 2172002">
    <title>index</title>
</head>
<body>
    <p>Create A Chess Board</p>
    <form action="" method="GET">
    Ukuran Board : <input type="text" name="a" id="a">&nbsp;<input type="submit" value="Buat Board">
    </form>
    <br>

    <table width="400" height="400" border="1">
        <?php
        $cell = $_GET["a"];
        $awal = 0;

        for($i=0; $i<$cell; $i++){
            echo "<tr>";

            for($j=0; $j<$cell; $j++){

                $total=$i+$j;
                if($total%2==0){
                    echo "<td bgcolor='black'></td>";
                }
                else echo "<td></td>";
            }
            {
                echo "</tr>";
            }

        }
        ?>
    </table>
</body>
</html>