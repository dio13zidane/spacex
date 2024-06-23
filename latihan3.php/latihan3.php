<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Gaji</title>
    <style>
        body{
            width: 90%;
            height: 100vh;
            
            
        }
        .container{
            text-align: center;
            align-content: center;
            margin-top: 15%;
            font-size: 20px;
            color: aliceblue;
            margin-top: 70px;
        }
        .form-container {
            background-color: #132542;
            padding: 20px;
            border-radius: 10px;
            width: fit-content;
            margin: auto;
            margin-left: 25%;
            margin-right: 20%;
            
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: white;
        }
        label {
            margin-bottom: 10px;
        }
        input[type="number"], input[type="text"] {
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: none;
        }
        input[type="submit"] {
            padding: 8px 20px;
            background-color: #08142c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #286bcf;
        }
        .output-container {
            background-color: #132542;
            padding: 20px;
            border-radius: 10px;
            width: fit-content;
            margin: 20px auto;
            color: white;
            margin-left: 60%;
            margin-top: -460px;
            margin-bottom: 20px;
        }
        .output-container label {
            display: block;
            margin-bottom: 10px;
        }
        .output-container input[type="text"] {
            border: none;
            background-color: transparent;
            color: rgb(0, 0, 0);
            width: 200px;
        }
        .output-container input[type="text"]:disabled {
            background-color: #ffffff;
        }

        button{
            padding: 8px 20px;
            background-color: #08142c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover{
            background-color: #286bcf;
        }
    </style>
</head>
<body bgcolor="#08142c">
<div class="container">
        <div class="form-container" >
            <h2>Perhitungan Gaji</h2>
            <form id="gajiForm" method="POST" action="">
                <label for="nama_karyawan">Nama Karyawan:</label>
                <input type="text" id="nama_karyawan" name="nama_karyawan">
                
                <label for="jam_lembur">Jam Lembur:</label>
                <input type="number" id="jam_lembur" name="jam_lembur">
                
                <label for="hari_kerja">Hari Kerja:</label>
                <input type="number" id="hari_kerja" name="hari_kerja">
                
                <label for="jam_kerja">Jam Kerja:</label>
                <input type="number" id="jam_kerja" name="jam_kerja">
                
                <button type="submit" name="hitung">Hitung Total</button>
            </form>
        </div>

        <div class="output-container" id="output">
            <h2>Hasil Perhitungan</h2>
            <label for="output_nama_karyawan">Nama Karyawan:</label>
            <input type="text" id="output_nama_karyawan" disabled>

            <label for="output_gaji_per_hari">Gaji per Hari:</label>
            <input type="text" id="output_gaji_per_hari" disabled>

            <label for="output_jam_lembur">Jam Lembur:</label>
            <input type="text" id="output_jam_lembur" disabled>

            <label for="output_hari_kerja">Hari Kerja:</label>
            <input type="text" id="output_hari_kerja" disabled>

            <label for="output_jam_kerja">Jam Kerja:</label>
            <input type="text" id="output_jam_kerja" disabled>

            <label for="output_upah_lembur">Upah Lembur:</label>
            <input type="text" id="output_upah_lembur" disabled>

            <label for="output_bonus_makan">Bonus Uang Makan:</label>
            <input type="text" id="output_bonus_makan" disabled>

            <label for="output_gaji_total">Gaji Total:</label>
            <input type="text" id="output_gaji_total" disabled>
        </div>
    </div>

        <input type="hidden" id="hidden_nama_barang" name="hidden_nama_barang">
            <input type="hidden" id="hidden_harga_barang" name="hidden_harga_barang">
            <input type="hidden" id="hidden_jumlah_barang" name="hidden_jumlah_barang">
            <input type="hidden" id="hidden_diskon" name="hidden_diskon">
            <input type="hidden" id="hidden_total_bayar" name="hidden_total_bayar">
        </form>
    </div>

    <?php
    if(isset($_POST['hitung'])){
    
        
            
            // Mengambil nilai dari input
            $nama_karyawan = $_POST['nama_karyawan'];
            $jam_lembur = isset($_POST['jam_lembur']) ? (int)$_POST['jam_lembur'] : 0;
            $hari_kerja = isset($_POST['hari_kerja']) ? (int)$_POST['hari_kerja'] : 0;
            $jam_kerja = isset($_POST['jam_kerja']) ? (int)$_POST['jam_kerja'] : 0;
            
            // Perhitungan upah lembur
            $upah_lembur = 0;
            if ($jam_lembur >= 1 && $jam_lembur <= 2) {
                $upah_lembur = 25000 * $jam_lembur;
            } else if ($jam_lembur >= 3) {
                $upah_lembur = 35000 * $jam_lembur;
            }

            // Perhitungan bonus uang makan
            $bonus_makan = $jam_kerja >= 20 ? 5000 * $hari_kerja : 0;

            // Hitung gaji total
            $gaji_per_hari = 50000;
            $gaji_total = ($gaji_per_hari * $hari_kerja) + $upah_lembur + $bonus_makan;

            ?>
            <script>
            // Menampilkan hasil perhitungan di dalam form output
            document.getElementById("output_nama_karyawan").value = "<?php echo $nama_karyawan; ?>";
            document.getElementById("output_gaji_per_hari").value = "Rp. <?php echo $gaji_per_hari; ?>";
            document.getElementById("output_jam_lembur").value = "<?php echo $jam_lembur; ?>";
            document.getElementById("output_hari_kerja").value = "<?php echo $hari_kerja; ?>";
            document.getElementById("output_jam_kerja").value = "<?php echo $jam_kerja; ?>";
            document.getElementById("output_upah_lembur").value = "Rp. <?php echo $upah_lembur; ?>";
           
            document.getElementById("output_bonus_makan").value = "Rp. <?php echo $bonus_makan ?>";
            document.getElementById("output_gaji_total").value = "Rp. <?php echo $gaji_total ?>";

            // Menampilkan form output
            document.getElementById("output").style.display = "block";
            </script>
            ;
    <?php
    }
    ?>
</body>
</html>
