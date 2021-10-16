<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Jerry Livano 2172002">
    <title>index</title>
</head>
<body>
    <form action="submit.php" name="DataDiri" method="POST">
    <table align="center" border="0" cellspacing="10">
        <caption>
            <font size="3">
            <b>Form Input</b>
            </font>
        </caption>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td colspan="2">  <input type="text" name="nama" id="nama" size="30"></td>
        </tr>

        <tr>
            <td>Email</td>
            <td>:</td>
            <td colspan="2">  <input type="text" name="email" id="email" size="30"></td>
        </tr>

        <tr>
            <td>Phone number</td>
            <td>:</td>
            <td colspan="2">  <input type="text" name="hp" id="hp" size="30"></td>
        </tr>

        <tr>
            <td>Hobby</td>
            <td>:</td>
            <td colspan="2">  <input type="text" name="hobi" id="hobi" size="30"></td>
        </tr>

        <tr>
            <td>Description</td>
            <td>:</td>
            <td colspan="2" align="left" valign="center">  <textarea name="desc" id="desc" cols="32" rows="10"></textarea></td>
        </tr>

        <tr>
            <td colspan="4" align="center">
                <input type="submit" value="Sumbit">
                <input type="reset" value="Reset">
            </td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    </form>
</body>
</html>