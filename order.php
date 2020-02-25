<?php

class Order {
    
    public $TAX = 0.1;
    
    public function __construct(){
        
    }
    
    public function getSubtotal($items){
        $subTotal = 0.0;
            foreach ($items as $item){
                $subTotal += ($item->price * $item->quantity);
            }
        return number_format($subTotal, 2);
    }
    
    public function getTax($items){
        $orderTax = ($this->getSubtotal($items) * $this->TAX);
        return number_format($orderTax, 2);
    }
    
    public function getTotal($items){
        $total = ($this->getTax($items) + $this->getSubtotal($items));
        return number_format($total, 2);
    }
    
}