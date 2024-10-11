<?php

$namas = ['farida', 'rabbani', 'virdynata'];
foreach ($namas as $nama) {         //foreach :untuk mengeluarkan data dari dalam array
    echo $nama .PHP_EOL;            // PHP_EOL : untuk memisahkan data array kebawah (baris baru)
}

// membuat fungsi

function hitung($a, $b) {
    return $a + $b;
}

$result = hitung (10, 20);
echo $result .PHP_EOL;


//array indeks (note : pada array di php dapat dimasukkan data apa saja, int ataupun string)
$animals = [''];

// array asosiatif

$user = [
    'nama' => 'farida',
    'nim' => '0112022',
];

echo $user['nama'] .PHP_EOL;
echo $user['nim'];


//cunstructure

function __construct($name, $age)
{
    

}
?>