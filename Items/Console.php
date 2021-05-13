<?php
require_once('ElectronicItem.php');

/**
 * Class Console
 */
class Console extends ElectronicItem
{
    private $extras = [];

    /**
     * Console constructor.
     * @param $price
     */
    public function __construct($price)
    {
        $this->setPrice($price);
        $this->setType('console');
    }

    /**
     * Returns the Console object
     * @return $this
     */
    public function item()
    {
        return $this;
    }

    /**
     * Gets the extras set
     * @return array
     */
    public function get_extras()
    {
        return $this->extras;
    }

    /**
     * Add extras for the electronic item
     * @param $item
     * @return string
     */
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

    /**
     * Get the total price of the electronic item, including extras.
     * @return int|mixed
     */
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
