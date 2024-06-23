<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Gaji</title>
    <style>
        .container {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
            height: 600px;
        }
        .form-container
         {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 20px;
            border-radius: 10px;
            width: 45%;
            display: block;
            margin-left: 20px;
            margin-top: -20px;
        }
        .penting
         {
            margin-top: 30px;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 30px;
            border-radius: 10px;
            width: 50%;
            display: block;
            height: 60vh;
            padding-right: 20%;
            padding-left: 20%;
            margin-left: 5%;
            padding-bottom: 11%;
            
        }
        .perhatian
         {
            margin-top: -10px;
            background-color: rgb(255, 255, 255);
            color: rgb(255, 0, 0);
            padding: 10px;
            border-radius: 10px;
            width: 60%;
            display: block;
            height: 20px;
            margin-left: 10%;
            text-align: center;
            padding-right: 10%;
            padding-left: 10%;
            
        }
        .penting .pria{
            background-color: rgb(0, 234, 255);
            color: rgb(0, 0, 0);
            padding: 20px;
            border-radius: 10px;
            width: 250px;
            display: block;
            text-align: center;
            margin-left: 20px;
            
        }
        .penting .Wanita{
            background-color: rgb(255, 0, 195);
            color: rgb(0, 0, 0);
            padding: 20px;
            border-radius: 10px;
            width: 250px;
            display: block;
            margin-top: -310px;
            margin-left: 370px;
            text-align: center;
            
        }

        .Wanita:hover {
            transform: scale(1.1);
            transition: .3s ease-in-out;
        }
        .pria:hover {
            transform: scale(1.1);
            transition: .3s ease-in-out;
        }


        
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label {
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="number"] {
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: none;
        }
        input[type="text"][disabled],
        input[type="number"][disabled] {
            background-color: #333;
        }
        input[type="submit"] {
            padding: 8px 20px;
            background-color: #0055ff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }
        input[type="submit"]:hover {
            background-color: #072044;
            transition: .5S;
        }
        .output-container {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
            width: fit-content;
            margin: 20px auto;
            color: white;
            text-align: center;
            width: 45%;
            margin-top: -20px;
            height: 578px;
            
        }
        .output-container label {
            display: block;
            margin-bottom: 10px;
        }
        .output-container input[type="text"] {
            padding: 8px 40px;
            text-align: center;
            border: none;
            background-color: transparent;
            color: rgb(0, 0, 0);
            width: 100px;
        }
        .output-container input[type="text"]:disabled {
            background-color: #ffffff;
        }
        .pegawai-container {
            background-color: #132542;
            padding: 20px;
            border-radius: 10px;
            width: fit-content;
            margin: 20px auto;
            color: white;
            text-align: center;
            width: 45%;
        }
    </style>
</head>
<body bgcolor="#08142c">
    <h1 style="color: #ffffff; text-align: center;">Recruitment</h1>
    <div class="perhatian">Perhatian! Harap Dibaca Persyaratan dibawah dan mohon masukkan data dengan benar</div>

    <div class="container">
        <div class="form-container">
            <h2 style="text-align: center;">Isi Data Diri Anda</h2>
            <form id="gajiForm" method="POST" action="">
                <label for="nama_lengkap">Nama Lengkap:</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap">
                
                <label for="jk">Jenis Kelamin (laki-laki/perempuan):</label>
                <input type="text" id="jk" name="jk">
                
                <label for="tinggi_badan">Tinggi Badan (dalam cm):</label>
                <input type="number" id="tinggi_badan" name="tinggi_badan">
                
                <label for="berat_badan">Berat Badan (dalam kg):</label>
                <input type="number" id="berat_badan" name="berat_badan">
                
                <label for="ipk">IPK:</label>
                <input type="text" id="ipk" name="ipk">
                
                <label for="pendidikan">Pendidikan (D3/S1):</label>
                <input type="text" id="pendidikan" name="pendidikan">
                
                <button type="submit" name="hitung">Hitung</button>
            </form>
        </div>

        <div class="output-container" >
            <h2>Data Diri</h2>
            <label for="output_nama_lengkap">Nama Lengkap:</label>
            <input type="text" id="output_nama_lengkap" name="output_nama_lengkap" disabled><br>
            
            <label for="output_jk">Jenis Kelamin:</label>
            <input type="text" id="output_jk" name="output_jk" disabled><br>
            
            <label for="output_tinggi_badan">Tinggi Badan:</label>
            <input type="text" id="output_tinggi_badan" name="output_tinggi_badan" disabled>
            
            <label for="output_berat_badan">Berat Badan:</label>
            <input type="text" id="output_berat_badan" name="output_berat_badan" disabled>
            
            <label for="output_ipk">IPK:</label>
            <input type="text" id="output_ipk" name="output_ipk" disabled>
            
            
            <label for="output_pendidikan">Pendidikan:</label>
            <input type="text" id="output_pendidikan" name="output_pendidikan" disabled>

            <label for="output_pendidikan">Announcement:</label>
        </div>
    </div>

    <div class="penting">
        <h1 style="text-align: center; color: #ff4f03;" >Per<span style="color: yellow;">syarat</span><span style="color: red;">an</span></h1>
        <div class="pria">
            Laki-Laki:<br>
                <br>Tinggi badan<br>
                Minimal 170<br>
                Maksimal 179

                <br><br>
                Cara Menghitung Berat Badan Ideal
                Tinggi Badan - 110<br>
                <br>

                <p>IPK : Minimal = 3</p>
                
                <P>Pendidikan :<br>
                    Minimal D3,
                    Maksimal S1
                
        </div>
        <div class="Wanita">
            Perempuan:<br>
                <br>Tinggi badan<br>
                Minimal 160<br>
                Maksimal 170

                <br><br>
                Cara Menghitung Berat Badan Ideal
                Tinggi Badan - 110<br>
                <br>

                <p>IPK : Minimal = 3</p>
                
                <P>Pendidikan :<br>
                Minimal D3,
                Maksimal S1
                
        </div>
        <p style="text-align: center; margin-top: 30px;">Diharapkan Para Pelamar Membaca Persyaratan diatas</p>
      
    </div>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari form
    $nama_lengkap = $_POST["nama_lengkap"];
    $jk = strtolower($_POST["jk"]);
    $tinggi_badan = isset($_POST["tinggi_badan"]) ? (int)$_POST["tinggi_badan"] : 0;
    $berat_badan = isset($_POST["berat_badan"]) ? (int)$_POST["berat_badan"] : 0;
    $ipk = isset($_POST["ipk"]) ? (float)$_POST["ipk"] : 0;
    $pendidikan = strtoupper($_POST["pendidikan"]);
    
    // Persyaratan
    if ((($jk === "laki-laki" && $tinggi_badan >= 170 && $tinggi_badan <= 179 && $berat_badan === $tinggi_badan - 110 && $ipk >= 3 && $ipk <= 4 && ($pendidikan === "D3" || $pendidikan === "S1")) ||
        ($jk === "perempuan" && $tinggi_badan >= 160 && $tinggi_badan <= 170 && $berat_badan === $tinggi_badan - 110 && $ipk >= 3 && $ipk <= 4 && ($pendidikan === "D3" || $pendidikan === "S1")))) {
        $persyaratanText = "<h3>Selamat Anda memenuhi syarat untuk menjadi pegawai.</h3>";
    } else {
        $persyaratanText = "<h3>Maaf, Anda tidak memenuhi syarat untuk menjadi pegawai.</h3>";
    }

?>
    <script>
    // Menampilkan hasil perhitungan di dalam form output
    document.getElementById("output_nama_lengkap").value = "<?php echo $nama_lengkap ?>";
    document.getElementById("output_jk").value = "<?php echo $jk ?>";
    document.getElementById("output_tinggi_badan").value = "<?php echo $tinggi_badan ?> cm";
    document.getElementById("output_berat_badan").value = "<?php echo $berat_badan ?> kg";
    document.getElementById("output_ipk").value = "<?php echo $ipk ?>";
    document.getElementById("output_pendidikan").value = "<?php echo $pendidikan ?>";

    // Menambahkan pesan persyaratan di bawah output pendidikan
    $outputContainer = document.querySelector(".output-container");
    $persyaratanDiv = document.createElement("div");
    $persyaratanDiv.innerHTML = "<?php echo $persyaratanText; ?>"; // Perbaikan di sini
    $outputContainer.appendChild($persyaratanDiv);
    </script>
    ;
<?php

}
?>
</body>
</html>

