<?php
class Animal {
    // Property animals sebagai array
    private $animals;

    // Constructor untuk mengisi data awal
    public function __construct() {
        // Data awal hewan yang disimpan di array
        $this->animals = ['cat', 'dog', 'fish'];
    }

    // Method untuk menampilkan seluruh data hewan
    public function index() {
        // Menampilkan semua hewan
        foreach ($this->animals as $animal) {
            echo $animal . PHP_EOL;
        }
    }

    // Method untuk menambahkan hewan baru
    public function store($newAnimal) {
        // Menambahkan hewan baru ke dalam array
        array_push($this->animals, $newAnimal);
        echo $newAnimal . " telah ditambahkan" .PHP_EOL;
    }

    // Method untuk memperbarui data hewan berdasarkan indeks
    public function update($index, $newAnimal) {
        // Mengecek apakah indeks valid
        if (isset($this->animals[$index])) {
            $oldAnimal = $this->animals[$index];
            $this->animals[$index] = $newAnimal;
            echo $oldAnimal . " telah diubah menjadi " . $newAnimal . PHP_EOL;
        } else {
            echo "Hewan dengan indeks " . $index . " tidak ditemukan" .PHP_EOL;
        }
    }

    // Method untuk menghapus data hewan berdasarkan indeks
    public function destroy($index) {
        // Mengecek apakah indeks valid
        if (isset($this->animals[$index])) {
            $deletedAnimal = $this->animals[$index];
            unset($this->animals[$index]); // Menghapus elemen array berdasarkan indeks
            // Mengatur ulang indeks array
            $this->animals = array_values($this->animals); 
            echo $deletedAnimal . " telah dihapus.<br>";
        } else {
            echo "Hewan dengan indeks " . $index . " tidak ditemukan.<br>";
        }
    }
}

// Contoh Penggunaan Class Animal
$animal = new Animal();

echo "<b>Daftar Hewan Awal:</b><br>";
$animal->index(); // Menampilkan daftar hewan awal

echo "<br><b>Menambah Hewan Baru:</b><br>";
$animal->store('bird'); // Menambah hewan baru
$animal->index(); // Menampilkan daftar hewan setelah ditambah

echo "<br><b>Memperbarui Hewan:</b><br>";
$animal->update(1, 'tiger'); // Memperbarui hewan di indeks 1
$animal->index(); // Menampilkan daftar hewan setelah diperbarui

echo "<br><b>Menghapus Hewan:</b><br>";
$animal->destroy(0); // Menghapus hewan di indeks 0
$animal->index(); // Menampilkan daftar hewan setelah dihapus

?>
