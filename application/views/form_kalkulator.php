<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <form action="<?php echo site_url('welcome/aksi_kalkulator'); ?>" method="POST">
        Angka Pertama   : <input type="text" name="angka1">
        Angka Kedua     : <input type="text" name="angka2">
        Operasi         : <select name="operasi">
            <option value="penjumlahan">Penjumplahan</option>
        </form>
    </pre>
</body>
</html>