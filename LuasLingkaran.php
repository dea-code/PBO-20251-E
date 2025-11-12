<?php

class LuasLingkaran {
    public const phi = 3.14;
    public int $jari;

    public function __construct($isiJari = 1) {
        $this->jari = $isiJari;
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
$lingkaran->tampil('roda');
LuasLingkaran::testing();
