<?php

class User{
    public $name;
    public $surname;
    protected $register = false;
    protected $expire_date;
    protected $credit_card;
    protected $discount = 0;
    public $cart_shop = [];
    
    function __construct($_name, $_surname, $_register, $_expire_date){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->register = $_register;
        $this->expire_date = $_expire_date;
        $this->checkRegister();
    }

    protected function checkRegister(){
        if($this->register === true && $this->$expire_date >= 2022){
            $this-> discount  = '20%';
        }else{
            echo 'Not discount applied';
        }
    }

    function AddToCart($product){
        $this-> cart_shop = $product;
    }
}


?>