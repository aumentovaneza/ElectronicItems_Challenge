<?php
require_once('ElectronicItem.php');

class Console extends ElectronicItem
{
    private $extras = [];

    public function __construct($price)
    {
        $this->setPrice($price);
        $this->setType('console');
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
        $extras = $this->extras;

        if(sizeof($extras) < $max){
            $this->extras[] = $item;
        } else {
            return "Maximum extras reached!";
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
