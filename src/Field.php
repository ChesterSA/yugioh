<?php

namespace Chestersa\Yugioh;

class Field
{
    public static $NIGHT = 'n';
    public static $DAY = 'd';
    public static $GRASS = 'g';
    public static $FOREST = 'f';
    public static $WATER = 'w';

    protected $field = [];

    public function getField()
    {
        return $this->field;
    }

    public function addNight($amount = 1)
    {
        $this->addToField(Field::$NIGHT, $amount);
    }

    public function addDay($amount = 1)
    {
        $this->addToField(Field::$DAY, $amount);
    }

    public function addGrass($amount = 1)
    {
        $this->addToField(Field::$GRASS, $amount);
    }

    public function addForest($amount = 1)
    {
        $this->addToField(Field::$FOREST, $amount);
    }

    public function addWater($amount = 1)
    {
        $this->addToField(Field::$WATER, $amount);
    }

    protected function addToField($type, $amount)
    {
        for($i = 0; $i < $amount; $i++){
            $this->field[] = $type;
        }
    }
}