<?php
$a1 = ['nim' => '1919', 'nama mahasiswa'=>'Nadia Nur Ismalia', 'nilai'=>90];
$a2 = ['nim' => '2929', 'nama mahasiswa'=>'Bayu Satria Pratama', 'nilai'=>80];
$a3 = ['nim' => '1112', 'nama mahasiswa'=>'Nazia Wafa Hapsari', 'nilai'=>50];
$a4 = ['nim' => '1515', 'nama mahasiswa'=>'Merlina Idawati', 'nilai'=>75];
$a5 = ['nim' => '1616', 'nama mahasiswa'=>'Muhammad Bayu Fazila', 'nilai'=>85];
$a6 = ['nim' => '2020', 'nama mahasiswa'=>'Zaki Aditya Gustiawan', 'nilai'=>95];
$a7 = ['nim' => '1717', 'nama mahasiswa'=>'Vitara Surya Rengganis', 'nilai'=>65];
$a8 = ['nim' => '1989', 'nama mahasiswa'=>'Ririn Rahmadiani', 'nilai'=>70];
$a9 = ['nim' => '2098', 'nama mahasiswa'=>'Siti Muniroch', 'nilai'=>60];
$a10 = ['nim' => '2121', 'nama mahasiswa'=>'Azril Aziz Nuruddin', 'nilai'=>55];

$ar_nilai = [$a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10];
$ar_judul = ['No', 'Nama Mahasiswa',  'Nim', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];


$nilai_tertinggi = max(array_column($ar_nilai, "nilai"));
$nilai_terendah = min(array_column($ar_nilai, "nilai"));
$nilai_rata_rata = array_sum(array_column($ar_nilai, "nilai")) / count($ar_nilai);
$jumlah_mahasiswa = count($ar_nilai);
$jumlah_keseluruhan_nilai = array_sum(array_column($ar_nilai, "nilai"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Nilai Mahasiswa</title>
</head>
<body>
    <h3 align="center">Daftar Nilai Mahasiswa</h3>
    <table border="1" cellpadding="5" cellspacing="0" width="100%" bgcolor="lightgrey">
        <thead bgcolor="lightblue">
            <tr>
            <?php
                foreach($ar_judul as $judul) {
                    echo "<th>$judul</th>";
                }
            ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach ($ar_nilai as $mhs) {
                $keterangan = ($mhs["nilai"] >= 65) ? "Lulus" : "Gagal";
                $grade = "";
                if ($mhs["nilai"] >= 90) {
                    $grade = "A";
                } elseif ($mhs["nilai"] >= 80) {
                    $grade = "B";
                } elseif ($mhs["nilai"] >= 70) {
                    $grade = "C";
                } elseif ($mhs["nilai"] >= 60) {
                    $grade = "D";
                } else {
                    $grade = "E";
                }
                $predikat = "";
                switch ($grade) {
                    case "A":
                        $predikat = "Memuaskan";
                        break;
                    case "B":
                        $predikat = "Bagus";
                        break;
                    case "C":
                        $predikat = "Cukup";
                        break;
                    case "D":
                        $predikat = "Kurang";
                        break;
                    case "E":
                        $predikat = "Buruk";
                        break;
                }
            ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $mhs['nama mahasiswa'] ?></td>
                <td><?= $mhs['nim'] ?></td>
                <td><?= $mhs['nilai'] ?></td>
                <td><?= $keterangan ?></td>
                <td><?= $grade ?></td>
                <td><?= $predikat ?></td>
            </tr>
            <?php $no++; } ?>
        </tbody>
        <tfoot bgcolor="lightblue">
            <tr>
                <th colspan="3">Nilai Tertinggi</th>
                <th colspan="5"><?= $nilai_tertinggi ?></th>
            </tr>
            <tr>
                <th colspan="3">Nilai Terendah</th>
                <th colspan="5"><?= $nilai_terendah ?></th>
            </tr>
            <tr>
                <th colspan="3">Nilai Rata-rata</th>
                <th colspan="5"><?= $nilai_rata_rata ?></th>
            </tr>
            <tr>
                <th colspan="3">Jumlah Mahasiswa</th>
                <th colspan="5"><?= $jumlah_mahasiswa ?></th>
            </tr>
            <tr>
                <th colspan="3">Jumlah Keseluruhan Nilai</th>
                <th colspan="5"><?= $jumlah_keseluruhan_nilai ?></th>
            </tr>
        </tfoot>
    </table>
</body>
</html>
