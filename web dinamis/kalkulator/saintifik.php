<html>
<head>
    <title>Kalkulator Saintifik</title>
</head>
<body>
    <h1>Kalkulator Saintifik</h1>
    <form>
        <input type="text" name="ekspresi">
        <div style="margin-top: 10px">
        <button type="button" onclick="location.href = '?'">Clear</button>
        <button type="submit">Hitung</button>
        </div>
        <!-- Start count -->
        <?php
        if ($_GET):
            $ekspresi = $_GET['ekspresi'];
            $hasil = eval("return {$ekspresi};"); ?>
            <div style="margin-top: 10px">
                Hasil <strong><?php echo $hasil?></strong>
            </div>
        <?php
        endif;
        ?>

        <!-- end count -->
    </form>
</body>
</html>