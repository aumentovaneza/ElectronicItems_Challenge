<?php
require_once('ElectronicItem.php');

class Controller extends ElectronicItem
{

    public function __construct($price, $wired)
    {
        $this->setPrice($price);
        $this->setWired($wired);
        $this->setType('controller');
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
