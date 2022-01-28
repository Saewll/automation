<?php

use Page\Acceptance\lesson9StepObjectListing;
use Page\Acceptance\lesson9StepObjectMainPage;
use Step\Acceptance\lesson9StepObjectFavorites;

class lesson9StepObjectCest
{
     public static $ADVERTS=10;
       

     // Тест на поиск блузки в модальном окне на сайте
     public function checkSearch(\Step\Acceptance\lesson9StepObjectFavorites $I)
     {
          $I->amOnPage(lesson9StepObjectMainPage::$URL);
          $I->addToFavorite();
          $I->click(lesson9StepObjectListing::$fvouritePage);
          $grab=$I->grabTextFrom(lesson9StepObjectListing::$counterFavorite);
          $I->assertEquals(lesson9StepObjectFavorites::$counter,$grab,'check that favourites counter is correct');

     }
}
