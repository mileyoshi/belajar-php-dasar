<?php
    // Tipe Data Number (integer dan float)
    $umur = 17; // integer
    $tinggi_badan = 150; // float

    // Tipe Data String
    $nama = "Meli Herawati";
    $alamat = "Ling Panyingkiran, Gg.Pabrik es, RT/RW 02/04, Kecamatan Sumedang utara, Kabupaten Sumedang  ";
    $pekerjaan = "Programmer";

    // Tipe Data Boolean
    $is_married = false; // Menyatakan apakah sudah menikah atau belum
    $punya_sim = true; // Menyatakan apakah memiliki SIM atau tidak

    // Output Data Diri
    echo "Nama: " . $nama . "<br>";
    echo "Umur: " . $umur . " tahun<br>";
    echo "Tinggi Badan: " . $tinggi_badan . " cm<br>";
    echo "Alamat: " . $alamat . "<br>";
    echo "Pekerjaan: " . $pekerjaan . "<br>";
    echo "Status Menikah: " . ($is_married ? "Sudah Menikah" : "Belum Menikah") . "<br>";
    echo "Memiliki SIM: " . ($punya_sim ? "Ya" : "Tidak") . "<br>";
?>