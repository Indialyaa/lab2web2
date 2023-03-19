<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h3>FORM INPUT</h3>
    <form method="post">
        <label>Nama : </label><br>
        <input type="text" name="nama"><br><br>
        <label>Tanggal Lahir : </label><br>
        <input type="date" name="tgl"><br><br>
        <label>Pekerjaan : </label><br>

        <!-- jenis jenis pekerjaan  -->
        <select name='pekerjaan'>
            <option value="">~ Jenis Pekerjaan ~</option>
            <option value="IT support">1. IT support</option>
            <option value="Data Scientist">2. Data Scientist</option>
            <option value="Web Developer">3. Web Developer</option>
            <option value="Programmer">4. Programmer</option>
            <option value="Dosen">5. Dosen</option>
        </select><br><br>
        <button type="submit">SUBMIT</button>
    </form>
    <h3>Output</h3>

    <?php
    // output nama, umur, pekerjaan dan gaji
    echo 'Nama Anda : ' . $_POST['nama'];
    $tgl = $_POST['tgl'];
    $lahir = new DateTime($tgl);
    $hari_ini = new DateTime();
    $diff = $hari_ini->diff($lahir);
    echo "<br> Umur Anda : " . $diff->y . " Tahun";
    echo "<br>";
    echo "Pekerjaan Anda : " . $_POST['pekerjaan'];
    $pekerjaan = $_POST['pekerjaan'];
    echo "";

    if ($pekerjaan == "IT support") {
        echo '<br> Gaji Anda : Rp.5.000.000';
    } elseif ($pekerjaan == "Data Scientist") {
        echo '<br> Gaji Anda : Rp.10.000.000';
    } elseif ($pekerjaan == "Web Developer") {
        echo '<br> Gaji Anda : Rp.7.000.000';
    } elseif ($pekerjaan == "Programmer") {
        echo '<br> Gaji Anda : Rp.15.000.000';
    } elseif ($pekerjaan == "Dosen") {
        echo '<br> Gaji Anda : Rp.5.000.000';
    }
    ?>
</body>

</html>