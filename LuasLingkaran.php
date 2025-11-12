<?php

namespace App\Math;

class LuasLingkaran {
    public const phi = 3.14;
    protected int $jari;

    public function __construct($isiJari = 1) {
        $this->jari = $isiJari; //10
    }

    public function tampil($nama = 'ban'): void {
        $rumus = LuasLingkaran::phi * ($this->jari * $this->jari);
        echo "Lingkaran {$nama} hasilnya adalah: {$rumus}";
    }

    public static function testing(): void {
        echo "<br/>";
        echo "Ini adalah method static";
    }

    public function __destruct() {
        echo "<br/>Proses selesai";
    }
}

$lingkaran = new LuasLingkaran(12);
// $lingkaran->jari = 12;
$lingkaran->tampil('roda'); // panggil method tampil
LuasLingkaran::testing(); // panggil static method
