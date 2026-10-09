<?php

class Produk {
    //property
    public string $code;
    public string $nama;
    public int $harga;
    public int $stok;

    //constant
    public const PAJAK = 0.11;
}

//object
$produk = new Produk ();

$produk->kode = "P0001";
$produk->nama = "Laptop";
$produk->harga = 10000000;
$produk->stok = 5;

//hitung pajak
$pajak = Produk::PAJAK * 100; //11
$jumlahpajak = $produk->harga * Produk::PAJAK; // 1.1 juta

//total
$total = $produk->harga + $jumlahpajak; // 11.1 juta

//Hasil
echo "produk: $produk->nama";
echo "<br/>";

echo "harga: $produk->harga";
echo "<br/>";

echo "stok: $produk->stok";
echo "<br/>";

echo "Pajak: ". $pajak . "%";
echo "<br/>";
echo "<br/>";
echo "Total Harga Setelah Pajak: $total";