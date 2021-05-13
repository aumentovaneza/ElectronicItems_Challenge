<?php
require_once('ElectronicItem.php');

/**
 * Class Television
 */
class Television extends ElectronicItem
{
    private $extras = [];

    /**
     * Television constructor.
     * @param $price
     */
    public function __construct($price)
    {
        $this->setPrice($price);
        $this->setType('television');
    }

    /**
     * Returns the Television object
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
     */
    public function add_extra($item)
    {
       $max = $this->maxExtras($this->getType());

       if($max){
            $this->extras[] = $item;
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
