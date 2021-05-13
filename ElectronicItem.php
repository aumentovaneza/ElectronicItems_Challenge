<?php


class ElectronicItem
{

    public $price;

    private $type;

    public $wired;

    const ELECTRONIC_ITEM_TELEVISION = 'television';
    const ELECTRONIC_ITEM_CONSOLE = 'console';
    const ELECTRONIC_ITEM_MICROWAVE = 'microwave';
    const ELECTRONIC_ITEM_CONTROLLER = 'controller';

    public static $types = array(
        self::ELECTRONIC_ITEM_CONSOLE,
        self::ELECTRONIC_ITEM_MICROWAVE,
        self::ELECTRONIC_ITEM_TELEVISION,
        self::ELECTRONIC_ITEM_CONTROLLER);

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getWired()
    {
        return $this->wired;
    }

    public function setPrice($price)
    {
        return $this->price = $price;
    }

    public function setType($type)
    {
        return $this->type = $type;
    }

    public function setWired($wired)
    {
        return $this->wired = $wired;
    }

    public function maxExtras($type)
    {
        switch ($type){
            case self::ELECTRONIC_ITEM_TELEVISION:
                return true;
            case self::ELECTRONIC_ITEM_MICROWAVE:
            case self::ELECTRONIC_ITEM_CONTROLLER:
                return false;
            case self::ELECTRONIC_ITEM_CONSOLE;
                return 4;
        }
    }
}
