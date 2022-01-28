<?php

use Page\Acceptance\lesson9StepObjectListing;
use Page\Acceptance\lesson9StepObjectMainPage;


class lesson9StepObjectCest
{
     public static $ADVERTS=10;
       

     // Тест на поиск блузки в модальном окне на сайте
     public function checkSearch(AcceptanceTester $I)
     {
      $I->amOnPage(lesson9StepObjectMainPage::$URL);
      $I->click(lesson9StepObjectMainPage::$carCategory);
      $I->waitForElementVisible(lesson9StepObjectMainPage::$filterSubmitButton);
      $I->click(lesson9StepObjectMainPage::$filterSubmitButton);
      $I->amOnUrl(lesson9StepObjectListing::$URL);
      $counter=0;

      for ($i=3; $i < 3+self::$ADVERTS; $i++) { 
          $I->click(sprintf(lesson9StepObjectListing::$favouriteButtonOnCard,$i));
          $counter++;
     };
       $I->scrollTo(lesson9StepObjectListing::$fvouritePage);
       $I->click(lesson9StepObjectListing::$fvouritePage);
       $grab=$I->grabTextFrom(lesson9StepObjectListing::$counterFavorite);
       $I->assertEquals($counter,$grab,'check that favourites counter is correct');

     }
}
