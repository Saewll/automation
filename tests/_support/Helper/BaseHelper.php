<?php
namespace Helper;
use Faker\Factory;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class BaseHelper extends \Codeception\Module
{
    public function getFaker($locale='en_EN'){
    $faker=Factory::create('en_EN');
    $faker->addProvider(new CustomFakerProvider($faker));
    return $faker;
    }
}
