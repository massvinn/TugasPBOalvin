<?php

namespace Pbo\Marketplace;

use Pbo\Marketplace;
require_once('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

class jasa {

    use produk;

    public function payment($tipe) {
    
      return match($tipe) {
        "virtual" => "Virtual Account",
        "qris" => "QRIS",
        default => "hanya bisa va dan qris"
      };
    }


}