<?php

class Animal {

    public $hewan;
    public $suara;
    public $habitat;
    public static $animals = []; // Array static untuk menyimpan daftar hewan

    public function __construct($hewan, $suara, $habitat){
        $this->hewan = $hewan;
        $this->suara = $suara;
        $this->habitat = $habitat;
    }

    public function getHewan() {
        echo "Hewan: " . $this->hewan . "\n";
        echo "Suara: " . $this->suara . "\n";
        echo "Habitat: " . $this->habitat . "\n";
    }

    // Menambahkan hewan baru ke dalam array $animals
    public static function store($hewan, $suara, $habitat) {
        $newAnimal = new Animal($hewan, $suara, $habitat);
        array_push(self::$animals, $newAnimal); // Menyimpan hewan ke dalam array
        echo "Hewan $hewan berhasil ditambahkan.\n";
    }

    // Menampilkan semua hewan yang ada di array $animals
    public static function index() {
        foreach (self::$animals as $index => $animal) {
            echo "[$index] Hewan: " . $animal->hewan . ", Suara: " . $animal->suara . ", Habitat: " . $animal->habitat . "\n";
        }
    }

    // Menghapus hewan berdasarkan indeks
    public static function destroy($index) {
        if (isset(self::$animals[$index])) {
            unset(self::$animals[$index]);
            echo "Hewan pada indeks $index berhasil dihapus.\n";
        } else {
            echo "Hewan pada indeks $index tidak ditemukan.\n";
        }
    }

    // Memperbarui data hewan berdasarkan indeks
    public static function update($index, $hewan, $suara, $habitat) {
        if (isset(self::$animals[$index])) {
            self::$animals[$index]->hewan = $hewan;
            self::$animals[$index]->suara = $suara;
            self::$animals[$index]->habitat = $habitat;
            echo "Hewan pada indeks $index berhasil diupdate.\n";
        } else {
            echo "Hewan pada indeks $index tidak ditemukan.\n";
        }
    }
}

// Menambahkan beberapa hewan ke dalam daftar
Animal::store('ikan hiu', 'blububblubub', 'di laut');
Animal::store('singa', 'rawrr', 'di darat');
Animal::store('kucing', 'miyaww', 'di darat');
Animal::store('ayam', 'kukuruyuk', 'di darat');
Animal::store('gagak', 'ak ak ak', 'di udara');

// Menampilkan semua hewan (index)
echo "Daftar hewan:\n";
Animal::index();

echo "\n";

// Mengupdate data hewan pada indeks 1 (singa)
Animal::update(1, 'singa besar', 'roarrrr', 'di hutan');

// Menampilkan semua hewan setelah update
echo "Daftar hewan setelah update:\n";
Animal::index();

echo "\n";

// Menghapus hewan pada indeks 0 (ikan hiu)
Animal::destroy(0);

// Menampilkan semua hewan setelah dihapus
echo "Daftar hewan setelah dihapus:\n";
Animal::index();

?>
