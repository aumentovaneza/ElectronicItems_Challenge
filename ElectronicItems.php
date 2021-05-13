<?php


class ElectronicItems
{

    private $items = array();

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function getSortedItems()
    {
        $sorted = array();

        foreach ($this->items as $item){
            $sorted[$item->price * 100] = $item;
        }

         ksort($sorted, SORT_NUMERIC);

        return $sorted;
    }

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

    public function getAllTotal()
    {
        $total = 0;

        foreach ($this->items as $item){
            $total = $total + $item->getTotal();
        }

        return $total;
    }
}
