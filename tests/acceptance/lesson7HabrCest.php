<?php

use Codeception\Example;
use Page\Acceptance\lesson7Habr;

class lesson7HabrCest
{
   

    /**
     * @param Example $data
     * @dataProvider dataForCategory
     */
    public function fillCard(AcceptanceTester $I,Example $data)
    {
       
        

        $I->amOnPage(lesson7Habr::$URL);
        $I->click(sprintf(lesson7Habr::$categories,array_rand($data['category'])));
        $I->waitForElementVisible(sprintf(lesson7Habr::$categoryHeader,array_rand($data['category'])));
        $I->seeInCurrentUrl(sprintf(array_rand($data['category_url'])));



     
        

    }
    protected function dataForCategory(){

        return [
            ['category'=>'Все потоки','category_url'=>'all'],
            ['category'=>'Разработка','category_url'=>'develop'],
            ['category'=>'Администрирование','category_url'=>'admin'],
            ['category'=>'Дизайн','category_url'=>'design'],
            ['category'=>'Менеджмент','category_url'=>'management'],
            ['category'=>'Маркетинг','category_url'=>'marketing'],
            ['category'=>'Научпоп','category_url'=>'popsci']


        ];
    }

}