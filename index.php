<?php

require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

//object
$produk = new Produk();

$produk->setKode('P0001')->setNama('Laptop')->setHarga('10000000')->setstok(5);


echo "Produk : ",$produk->getNama(), "<br>";
echo "Harga : Rp.", $produk->getHarga(), "<br>";
echo "Stok : ", $produk->getStok(), "<br>";
echo "Pajak : ", $produk->pajak(), "% <br> <br> ";
echo "Total setelah  harga pajak : Rp.", $produk->total(), "<br>";