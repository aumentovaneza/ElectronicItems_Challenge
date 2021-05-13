<?php
require_once('ElectronicItem.php');

class Television extends ElectronicItem
{
    private $extras = [];

    public function __construct($price)
    {
        $this->setPrice($price);
        $this->setType('television');
    }

    public function item()
    {
        return $this;
    }

    public function get_extras()
    {
        return $this->extras;
    }

    public function add_extra($item)
    {
       $max = $this->maxExtras($this->getType());

       if($max){
            $this->extras[] = $item;
       }
    }

    public function getTotal()
    {
        $total = 0;

        $total = $total + $this->getPrice();

        if($this->extras != null){
            foreach ($this->extras as $extra){
                $total =  $total + $extra->getPrice();

            }
        }

        return $total;
    }

}
