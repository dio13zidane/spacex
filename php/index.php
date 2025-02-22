<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  .barang{
        background-color: rgba(50, 50, 50, 0.362);
        color: white;
        padding: 20px;
        max-width: 300px;
        text-align: center;
        position: relative;
        z-index: 1;
        left: 30px;
        margin-top: 6%;
        margin-left: 38%;
    }
    body {
        background-color: #08142c;
    }
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    input, button {
        margin: 5px 0;
    }

    button {
        border-radius: 6px;
        width: 100px;
        height: 50px;
        font-size: 14;
    }

    button:hover{
        transition: .5s;
        background-color: blue;
        color: azure;
    }
</style>
<body bgcolor="#08142c">
    <div class="barang">
        <h2>Xion Market</h2>
        <p>♉︎</p>
        <form id="barangForm" method="POST" action="">
            <label for="nama_barang"> Nama Barang:</label><br>
            <input type="text" id="nama_barang" name="nama_barang"/><br>

            <label for="harga_barang"> Harga Barang:</label><br>
            <input type="number" id="harga_barang" name="harga_barang"/><br>

            <label for="jumlah_barang"> Jumlah Barang:</label><br>
            <input type="number" id="jumlah_barang" name="jumlah_barang"/><br>
            <button type="submit" name="hitung">Hitung Total</button>
        </form>
        <fieldset id="output" disabled>
            <legend>Hasil</legend>
            <p>Nama Barang:</p>
            <input type="text" id="output_nama_barang" disabled><br>

            <p>Harga Barang:</p>
            <input type="text" id="output_harga_barang" disabled><br>

            <p>Jumlah Barang:</p>
            <input type="text" id="output_jumlah_barang" disabled><br>

            <p>Diskon:</p>
            <input type="text" id="output_diskon" disabled><br>

            <p>Total Bayar:</p>
            <input type="text" id="output_total_bayar" disabled><br>
        </fieldset>
    </div>
    <?php
    if(isset($_POST['hitung'])){
        $nama_barang = $_POST['nama_barang'];
        $harga_barang = isset($_POST['harga_barang']) ? (float)$_POST['harga_barang'] : 0;
        $jumlah_barang = isset($_POST['jumlah_barang']) ? (int)$_POST['jumlah_barang'] : 0;

        $total_harga = $harga_barang * $jumlah_barang;
        $diskon = 0;

        if ($jumlah_barang >= 3) {
            $diskon = 0.3 * $harga_barang * $jumlah_barang; 
        }

        $total_bayar = $total_harga - $diskon;
        ?>
        <script>
            document.getElementById("output_nama_barang").value = "<?php echo $nama_barang; ?>";
            document.getElementById("output_harga_barang").value = "<?php echo $harga_barang; ?>";
            document.getElementById("output_jumlah_barang").value = "<?php echo $jumlah_barang; ?>";
            document.getElementById("output_diskon").value = "<?php echo $diskon; ?>";
            document.getElementById("output_total_bayar").value = "<?php echo number_format($total_bayar, 2); ?>";
        </script>
        <?php
    }
    ?>
</body>
</html>
