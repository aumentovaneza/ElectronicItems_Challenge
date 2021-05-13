<?php
require_once('ElectronicItem.php');

class Microwave extends ElectronicItem
{

    public function __construct($price)
    {
        $this->setPrice($price);
        $this->setType('microwave');
    }

    public function item()
    {
        return $this;
    }

    public function add_extra($item)
    {
        $max = $this->maxExtras($this->getType());

        if(!$max){
            return "Extras for this item are not allowed!";
        }
    }

    public function getTotal()
    {
        $total = 0;

        $total = $total + $this->getPrice();

        return $total;
    }

}
