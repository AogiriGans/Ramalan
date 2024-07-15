<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramalan Nama</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <?php
            if (isset($_POST['nama'])) {
                $nama = htmlspecialchars($_POST['nama']);
                $nasibBaik = array("Anda akan mendapatkan rejeki nomplok hari ini.", "Hari ini adalah hari keberuntungan Anda.", "Anda akan bertemu dengan seseorang yang spesial.", "Kamu Akan Mendapatkan Janda Anak 40.", "Kamu Akan Mendapatkan Pasangan Cindo.", "Kamu Akan Naik Gaji.", "Kamu Mendapatkan Pacar Loli.");    $nasibBuruk = array("Hati-hati dengan keputusan Anda hari ini.", "Ada tantangan besar yang harus dihadapi.", "Anda mungkin akan kehilangan sesuatu yang berharga.");
                
                $ramalanBaik = $nasibBaik[array_rand($nasibBaik)];
                $ramalanBuruk = $nasibBuruk[array_rand($nasibBuruk)];

                echo "<h1>Halo, $nama!</h1>";
                echo "<p><strong>Nasib Baik:</strong> $ramalanBaik</p>";
                echo "<p><strong>Nasib Buruk:</strong> $ramalanBuruk</p>";
            } else {
                echo "<p>Nama tidak ditemukan. Silakan kembali ke halaman utama dan masukkan nama Anda.</p>";
            }
        ?>
        <p> Ini Hanyalah Bohongan Atau Prank, Tidak Nyata.</p>
        <a href="index.php">Kembali ke Halaman Utama</a>
    </div>
</body>
</html>