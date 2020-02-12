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
        return $subTotal;
    }
    
    public function getTax($items){
        $orderTax = ($this->getSubtotal($items) * $this->TAX);
        return $orderTax;
    }
    
    public function getTotal($items){
        $total = ($this->getTax($items) + $this->getSubtotal($items));
        return $total;
    }
    
}