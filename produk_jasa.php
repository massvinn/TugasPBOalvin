<?php

require('./jasa.php');

use Pbo\Marketplace\jasa;

//object
$produk = new jasa();

$produk->setKode('P0001')
       ->setNama('Laptop')
       ->setHarga('10000000')
       ->setStok(5);

//Hasil
echo "Produk:", $produk->getNama();
echo "<br/>";

echo "harga: Rp.", $produk->getHarga();
echo "<br/>";

echo "stok:", $produk->getStok();
echo "<br/>";

echo "pajak:", $produk->pajak() . "%";
echo "<br/>";
echo "<br/>";
echo "Total harga setelah pajak: Rp.". $produk->total();

echo "<br/>";
echo "Metode Pembayaran: ". $produk->payment('qris');