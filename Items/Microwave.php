<?php
require_once('ElectronicItem.php');

/**
 * Class Microwave
 */
class Microwave extends ElectronicItem
{

    /**
     * Microwave constructor.
     * @param $price
     */
    public function __construct($price)
    {
        $this->setPrice($price);
        $this->setType('microwave');
    }

    /**
     * Returns the Microwave object
     * @return $this
     */
    public function item()
    {
        return $this;
    }

    /**
     * Add extras for the electronic item
     * @param $item
     * @return string
     */
    public function add_extra($item)
    {
        $max = $this->maxExtras($this->getType());

        if(!$max){
            return "Extras for this item are not allowed!";
        }
    }

    /**
     * Get the total price of the electronic item.
     * @return int|mixed
     */
    public function getTotal()
    {
        $total = 0;

        $total = $total + $this->getPrice();

        return $total;
    }

}
