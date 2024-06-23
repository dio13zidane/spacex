<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Zodiak</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 200%;
            align-items: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-image: url(zodiac/imgbg2.png);
            margin-bottom: 40px;
        }
        .form-container {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 20px;
            text-align: center;
            width: 500px;
            height: 110vh;
            margin-top: 10px;
            border-radius: 10px;
            margin-left: 10px;
        }
        .form-container input, .form-container textarea {
            margin: 10px 0;
            padding: 10px;
            width: 80%;
        }
        .form-container button {
            padding: 10px 20px;
            background-color: orange;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .form-container button:hover {
            background-color: rgba(255, 166, 0, 0.571);
            transition: .6s;
        }
        .ramalan-container {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 20px;
            max-width: 300px;
            text-align: left;
            position: relative;
            z-index: 1;
            margin-top: 20px;
        }
        .ramalan-text {
            margin-top: 20px;
        }
        .gambar-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        .ramalan-pisces, .ramalan-aquarius, .ramalan-aries, .ramalan-taurus, .ramalan-gemini, .ramalan-cancer, .ramalan-leo, .ramalan-virgo, .ramalan-libra, .ramalan-scorpio, .ramalan-sagittarius, .ramalan-capricorn {
            color: orange;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            color: white;
            border-radius: 5px;
        }
        table, th, td {
            border: 1px solid white;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: rgb(255, 0, 0);
            text-align: center;
        }
        input {
            width: 100px;
            text-align: center;
            border-radius: 4px;
        }
    </style>
</head>
<body>
<?php
    function getZodiak($tanggal, $bulan) {
        if (($bulan == 1 && $tanggal >= 20) || ($bulan == 2 && $tanggal <= 18)) {
            return "Aquarius";
        } elseif (($bulan == 2 && $tanggal >= 19) || ($bulan == 3 && $tanggal <= 20)) {
            return "Pisces";
        } elseif (($bulan == 3 && $tanggal >= 21) || ($bulan == 4 && $tanggal <= 19)) {
            return "Aries";
        } elseif (($bulan == 4 && $tanggal >= 20) || ($bulan == 5 && $tanggal <= 20)) {
            return "Taurus";
        } elseif (($bulan == 5 && $tanggal >= 21) || ($bulan == 6 && $tanggal < 20)) {
            return "Gemini";
        } elseif (($bulan == 6 && $tanggal >= 21) || ($bulan == 7 && $tanggal <= 22)) {
            return "Cancer";
        } elseif (($bulan == 7 && $tanggal >= 23) || ($bulan == 8 && $tanggal <= 22)) {
            return "Leo";
        } elseif (($bulan == 8 && $tanggal >= 23) || ($bulan == 9 && $tanggal <= 22)) {
            return "Virgo";
        } elseif (($bulan == 9 && $tanggal >= 23) || ($bulan == 10 && $tanggal <= 22)) {
            return "Libra";
        } elseif (($bulan == 10 && $tanggal >= 23) || ($bulan == 11 && $tanggal <= 21)) {
            return "Scorpio";
        } elseif (($bulan == 11 && $tanggal >= 22) || ($bulan == 12 && $tanggal <= 21)) {
            return "Sagittarius";
        } elseif (($bulan == 12 && $tanggal >= 22) || ($bulan == 1 && $tanggal <= 19)) {
            return "Capricorn";
        } else {
            return "Invalid";
        }
    }

    function getRamalan($zodiak) {
        $ramalanList = [
            "Aries" => [
                "kesehatan" => "Kesehatan baik",
                "asmara" => "Asmara berjalan lancar",
                "keuangan" => "Keuangan stabil",
                "karier" => "Karier berkembang"
            ],
            "Taurus" => [
                "kesehatan" => "Kesehatan perlu diperhatikan",
                "asmara" => "Asmara mengalami hambatan kecil",
                "keuangan" => "Keuangan stabil",
                "karier" => "Karier cemerlang"
            ],
            "Gemini" => [
                "kesehatan" => "Kesehatan baik",
                "asmara" => "Asmara berjalan lancar",
                "keuangan" => "Keuangan stabil",
                "karier" => "Karier berkembang"
            ],
            "Cancer" => [
                "kesehatan" => "Kesehatan perlu diperhatikan",
                "asmara" => "Asmara mengalami hambatan kecil",
                "keuangan" => "Keuangan stabil",
                "karier" => "Karier cemerlang"
            ],
            "Leo" => [
                "kesehatan" => "Kesehatan baik",
                "asmara" => "Asmara berjalan lancar",
                "keuangan" => "Keuangan stabil",
                "karier" => "Karier berkembang"
            ],
            "Virgo" => [
                "kesehatan" => "Kesehatan perlu diperhatikan",
                "asmara" => "Asmara mengalami hambatan kecil",
                "keuangan" => "Keuangan stabil",
                "karier" => "Karier cemerlang"
            ],
            "Libra" => [
                "kesehatan" => "Kesehatan baik",
                "asmara" => "Asmara berjalan lancar",
                "keuangan" => "Keuangan stabil",
                "karier" => "Karier berkembang"
            ],
            "Scorpio" => [
                "kesehatan" => "Kesehatan perlu diperhatikan",
                "asmara" => "Asmara mengalami hambatan kecil",
                "keuangan" => "Keuangan stabil",
                "karier" => "Karier cemerlang"
            ],
            "Sagittarius" => [
                "kesehatan" => "Kesehatan baik",
                "asmara" => "Asmara berjalan lancar",
                "keuangan" => "Keuangan stabil",
                "karier" => "Karier berkembang"
            ],
            "Capricorn" => [
                "kesehatan" => "Kesehatan perlu diperhatikan",
                "asmara" => "Asmara mengalami hambatan kecil",
                "keuangan" => "Keuangan stabil",
                "karier" => "Karier berkembang"
            ],
            "Aquarius" => [
                "kesehatan" => "Kesehatan baik",
                "asmara" => "Asmara berjalan lancar",
                "keuangan" => "Keuangan stabil",
                "karier" => "Karier berkembang"
            ],
            "Pisces" => [
                "kesehatan" => "Kesehatan perlu diperhatikan",
                "asmara" => "Asmara mengalami hambatan kecil",
                "keuangan" => "Keuangan stabil",
                "karier" => "Karier cemerlang"
            ]
        ];
        return $ramalanList[$zodiak] ?? null;
    }

    $tanggal = isset($_POST['tanggal']) ? (int) $_POST['tanggal'] : null;
    $bulan = isset($_POST['bulan']) ? (int) $_POST['bulan'] : null;
    $zodiak = $tanggal && $bulan ? getZodiak($tanggal, $bulan) : "Zodiak Anda";
    $ramalan = $zodiak !== "Zodiak Anda" ? getRamalan($zodiak) : null;
?>


<div class="form-container">
    <h2>Masukkan Tanggal Lahir Anda</h2>
    <form method="POST">
        <input type="number" name="tanggal" id="tanggal" placeholder="Tanggal (1-31)" min="1" max="31" required value="<?php echo $tanggal; ?>">
        <input type="number" name="bulan" id="bulan" placeholder="Bulan (1-12)" min="1" max="12" required value="<?php echo $bulan; ?>">
        <button type="submit" name="submit">Lihat Ramalan</button>
    </form>

    <h2>Hasil Ramalan Zodiak Anda</h2>
    <input type="text" id="zodiak" value="<?php echo htmlspecialchars($zodiak); ?>" readonly>
    <table>
        <tr>
            <th>Kategori</th>
            <th>Ramalan</th>
        </tr>
        <tr>
            <td>Kesehatan</td>
            <td><input type="text" id="ramalan-kesehatan" value="<?php echo htmlspecialchars($ramalan['kesehatan'] ?? ''); ?>" readonly></td>
        </tr>
        <tr>
            <td>Asmara</td>
            <td><input type="text" id="ramalan-asmara" value="<?php echo htmlspecialchars($ramalan['asmara'] ?? ''); ?>" readonly></td>
        </tr>
        <tr>
            <td>Keuangan</td>
            <td><input type="text" id="ramalan-keuangan" value="<?php echo htmlspecialchars($ramalan['keuangan'] ?? ''); ?>" readonly></td>
        </tr>
        <tr>
            <td>Karier</td>
            <td><input type="text" id="ramalan-karier" value="<?php echo htmlspecialchars($ramalan['karier'] ?? ''); ?>" readonly></td>
        </tr>
    </table>
    <?php if ($zodiak != "Zodiak Anda"): ?>
        <script>
            var imgFolderPath = 'zodiac/';
            var imgSrc = imgFolderPath + "<?php echo strtolower($zodiak); ?>" + '.png';
            document.body.style.backgroundImage = "url('" + imgSrc + "')";
        </script>
    <?php endif; ?>
</div>
</body>
</html>
