<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php echo validation_errors(); ?>
        <form action="<?php echo site_url('welcome/aksi_kalkulator'); ?>" method="POST">
        Angka Pertama   : <input type="text" name="angka1">
        <br>
        Angka Kedua     : <input type="text" name="angka2">
        <br>
        Operasi         : <select name="operasi">
            <option value="penjumlahan">Penjumplahan</option>
            <option value="pengurangan">Pengurangan</option>
            <option value="perkaalian">Perkalian</option>
            <option value="pembagian">Pembagian</option>
        </select>
        <br>
            <input type="submit" value="Hitung">
        </form>
    </pre>
</body>
</html>