<?php

/**
 * Class ElectronicItems
 */
class ElectronicItems
{

    private $items = array();

    /**
     * ElectronicItems constructor.
     * @param array $items
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    /**
     * Sort items by price and return sorted items
     * @return array
     */
    public function getSortedItems()
    {
        $sorted = array();

        foreach ($this->items as $item){
            $sorted[$item->price * 100] = $item;
        }

         ksort($sorted, SORT_NUMERIC);

        return $sorted;
    }

    /**
     * Get items by type
     * @param $type
     * @return array|null
     */
    public function getItemsByType($type)
    {
        $items = null;

        if (in_array($type, ElectronicItem::$types))
        {
            $callback = function($item) use ($type){
                return $item->type == $type;
            };

            $items = array_filter($this->items, $callback);
        }
        return $items;
    }

    /**
     * Added a new function to get the total of all of the electronic items
     * @return int
     */
    public function getAllTotal()
    {
        $total = 0;

        foreach ($this->items as $item){
            $total = $total + $item->getTotal();
        }

        return $total;
    }
}
