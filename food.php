<?php

require_once __DIR__ . '/general_product.php';


class Food extends Product{
    public $expire_date;
    public $type;
    public $weight;

    function __construct($_expire_date, $_type, $_weight, $_price, $_code, $_repart){
        parent::__construct($_price, $_code, $_repart);
        $this->expire_date = $_expire_date;
        $this->type = $_type;
        $this->weight = $_weight;

    }
}



?>