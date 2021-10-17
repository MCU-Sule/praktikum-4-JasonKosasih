<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="2172012 Jason">
    <title>Document</title>
</head>
<body>
    <h1>Form Input Berhasil Diterima</h1>\
    <table border="none">
        <tr>
            <td>Nama Saya Adalah <?php echo $_POST['nama'] ?></td>
        </tr>
        <tr>
            <td>Email Saya Yaitu <?php echo $_POST['email'] ?></td>
        </tr>
        <tr>
            <td>No hp saya adalah <?php echo $_POST['phone'] ?></td>
        </tr>
        <tr>
            <td>Hobi saya yaitu <?php echo $_POST['hobi'] ?></td>
        </tr>
        <tr>
            <td>Deskripsi diri saya adalah <?php echo $_POST['deskripsi'] ?></td>
        </tr>
        <hr>
    </table>
</body>
</html>