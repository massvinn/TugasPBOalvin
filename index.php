<?php

require('./ahmdalvin.php');

use Pbo\Marketplace\Produk;

//object
$produk = new Produk('P001','Laptop',10000000,5);

//Hasil
echo "produk: $produk->nama";
echo "<br/>";

echo "harga: $produk->harga";
echo "<br/>";

echo "stok: $produk->stok";
echo "<br/>";

echo "Pajak: ". $produk->pajak() . "%";
echo "<br/>";
echo "<br/>";
echo "Total Harga Setelah Pajak: Rp.". $produk->total();