<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="2172012 Jason">
    <title>Document</title>
</head>
<body>
<form action="hasil2.php" method="GET" name="Kalkulator">
        <fieldset>
            <table border="2" align="center" cellspacing="0">
                <tr>
                    <td colspan="2" align="middle" style="background-color: rgb(235,77,75);"><b>Kalkulator</b></td>
                </tr>
                <tr>
                    <td style="background-color: rgb(255,121,121);">Angka pertama</td>
                    <td><input type="number" name="angka1" id="angka1"></td>
                </tr>
                <tr>
                    <td style="background-color: rgb(255,121,121);">Angka Kedua</td>
                    <td><input type="number" name="angka2" id="angka2"></td>
                </tr>
                <tr>
                    <td style="background-color: rgb(255,121,121);">Operator</td>
                    <td><input type="text" name="operator" id="operator"></td>
                </tr>
                <tr>
                    <td colspan="2" align="middle" style="background-color: rgb(235,77,75);">
                    <div style="width: 100%; text-align: middle;">
                    <input type="submit" value="Submit" target="hasil2.php">
                    <input type="reset" value="Reset">
                    </div></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>