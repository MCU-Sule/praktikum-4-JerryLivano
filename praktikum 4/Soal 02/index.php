<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Jerry Livano 2172002">
    <title>index</title>
</head>
<body>
    <form action="submit.php" name="kalkulator" method="GET"> 
    <table bgcolor="black" align="center" border="1" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="3" align="center" bgcolor="#de2b10">Kalkulator</td>
        </tr>

        <tr>
            <td bgcolor="#e35f5f">Angka pertama</td>
            <td colspan="2" width="200"><input type="text" name="angka1" id="angka1" size="25"></td>
        </tr>

        <tr>
            <td bgcolor="#e35f5f">Angka kedua</td>
            <td colspan="2"><input type="text" name="angka2" id="angka2" size="25"></td>
        </tr>

        <tr>
            <td bgcolor="#e35f5f">Operator</td>
            <td colspan="2"><input type="text" name="op" id="op" size="25"></td>
        </tr>

        <tr>
            <td colspan="3" align="center" bgcolor="#de2b10">
                <input type="submit" name="submit" value="Submit">
                <input type="reset" value="Reset">
            </td>
        </tr>
    </table>
    </form>
</body>
</html>