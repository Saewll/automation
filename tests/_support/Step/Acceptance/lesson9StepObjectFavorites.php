<?php
namespace Step\Acceptance;
use Page\Acceptance\lesson9StepObjectListing;
use Page\Acceptance\lesson9StepObjectMainPage;



class lesson9StepObjectFavorites extends \AcceptanceTester
{
    public static $ADVERTS=10;
    public static $counter=0;

    public function addToFavorite(){
        $I=$this;
        $I->click(lesson9StepObjectMainPage::$carCategory);
      $I->waitForElementVisible(lesson9StepObjectMainPage::$filterSubmitButton);
      $I->click(lesson9StepObjectMainPage::$filterSubmitButton);
      $I->amOnUrl(lesson9StepObjectListing::$URL);

      for ($i=3; $i < 3+self::$ADVERTS; $i++) { 
          $I->click(sprintf(lesson9StepObjectListing::$favouriteButtonOnCard,$i));
          self::$counter++;
     };
       $I->scrollTo(lesson9StepObjectListing::$fvouritePage);
    }

}