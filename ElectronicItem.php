<?php

/**
 * Class ElectronicItem
 */
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
     * Get price
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get type
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get wired
     * @return mixed
     */
    public function getWired()
    {
        return $this->wired;
    }

    /**
     * Set price
     * @param $price
     * @return mixed
     */
    public function setPrice($price)
    {
        return $this->price = $price;
    }

    /**
     * Set type
     * @param $type
     * @return mixed
     */
    public function setType($type)
    {
        return $this->type = $type;
    }

    /**
     * Set wired
     * @param $wired
     * @return mixed
     */
    public function setWired($wired)
    {
        return $this->wired = $wired;
    }

    /**
     * Check max extras
     * @param $type
     * @return bool|int
     */
    public function maxExtras($type)
    {
        switch ($type){
            // If electronic type is a television, return true since it has no limit
            case self::ELECTRONIC_ITEM_TELEVISION:
                return true;
            // If electronic type is a microwave or a controller, return false since it doesn't need any extra
            case self::ELECTRONIC_ITEM_MICROWAVE:
            case self::ELECTRONIC_ITEM_CONTROLLER:
                return false;
            // If electronic type is a console, return 4 since the max is set to 4
            case self::ELECTRONIC_ITEM_CONSOLE;
                return 4;
        }
    }
}
