<?php
namespace Helper;

use Faker\Provider\Base;

class CustomFakerProvider extends Base
{
    protected  $cardsnum=[
        '9989787978787',
        '9989787978784',
        '9989787978782'
        
    ];

    public function getCards(){
        $a=array_rand($this->cardsnum);
        $b=$this->cardsnum[$a];
        return $b;
        
    }

}