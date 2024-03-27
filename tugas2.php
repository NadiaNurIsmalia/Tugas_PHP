<!DOCTYPE html>
<html>
<head>
    <title>Form Belanja</title>
    <style>
        .container {
            width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
        }
        .input-group {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        .input-group label {
            flex: 1;
            text-align: left;
            margin-right: 10px;
        }
        .input-group input,
        .input-group select {
            flex: 2;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 48%;
            background-color: gray;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: black;
        }
        .output {
            width: 400px;
            margin: auto;
            margin-top: 20px;
            text-align: left;
        }
        .output h2 {
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Form Belanja</h2>
    <div class="container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="input-group">
                <label>Nama Pelanggan:</label>
                <input type="text" name="nama_pelanggan">
            </div>
            <div class="input-group">
                <label>Produk Pilihan:</label>
                <select name="produk">
                    <option value="">--Pilih Produk--</option>
                    <option value="TV">TV</option>
                    <option value="Kulkas">Kulkas</option>
                    <option value="Mesin Cuci">Mesin Cuci</option>
                    <option value="AC">AC</option>
                </select>
            </div>
            <div class="input-group">
                <label>Jumlah Beli:</label>
                <input type="number" name="jumlah_beli" min="1">
            </div>
            <button type="submit" name="submit">Simpan</button>
            <button type="reset">Batal</button>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama_pelanggan = $_POST['nama_pelanggan'];
        $produk = $_POST['produk'];
        $jumlah_beli = $_POST['jumlah_beli'];
        
        
        switch ($produk) {
            case 'TV':
                $harga_satuan = 2000000; 
                break;
            case 'Kulkas':
                $harga_satuan = 3000000; 
                break;
            case 'Mesin Cuci':
                $harga_satuan = 4000000; 
                break;
            case 'AC':
                $harga_satuan = 5000000; 
                break;
            default:
                $harga_satuan = 0;
                break;
        }
        
        $total_belanja = $jumlah_beli * $harga_satuan;
        $diskon = 0.20 * $total_belanja;
        $ppn = 0.10 * ($total_belanja - $diskon);
        $harga_bersih = $total_belanja - $diskon + $ppn;

        echo "<div class='output'>";
        echo "Nama Pelanggan: $nama_pelanggan <br>";
        echo "Produk Pilihan: $produk <br>";
        echo "Jumlah Beli: $jumlah_beli <br>";
        echo "Harga Satuan: $harga_satuan <br>";
        echo "Total Belanja: $total_belanja <br>";
        echo "Diskon: $diskon <br>";
        echo "PPN: $ppn <br>";
        echo "Harga Bersih: $harga_bersih <br>";
        echo "</div>";
    }
    ?>

</body>
</html>
