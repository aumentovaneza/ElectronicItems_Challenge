<?php
require_once('ElectronicItem.php');

/**
 * Class Controller
 */
class Controller extends ElectronicItem
{
    /**
     * Controller constructor.
     * @param $price
     * @param $wired
     */
    public function __construct($price, $wired)
    {
        $this->setPrice($price);
        $this->setWired($wired);
        $this->setType('controller');
    }

    /**
     * Returns the Controller object
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
