<?php

$data_mahasiswa = [
    "2311102246" => [
        "nama" => "Annasya Maulafidatu Zahra",
        "jurusan" => "Informatika",
        "email" => "nasya@example.com"
    ],
    "2311102259" => [
        "nama" => "Lisa",
        "jurusan" => "Informatika",
        "email" => "lisa@example.com"
    ],
    "2312345678" => [
        "nama" => "Nisrina",
        "jurusan" => "Desain Komunikasi Visual",
        "email" => "Nisrina@example.com"
    ]
];

if (isset($_POST['nim'])) {
    $nim = $_POST['nim'];

    if (array_key_exists($nim, $data_mahasiswa)) {
        echo json_encode($data_mahasiswa[$nim]);
    } else {
        echo json_encode([
            "nama" => "Tidak ditemukan",
            "jurusan" => "-",
            "email" => "-"
        ]);
    }
}
?>