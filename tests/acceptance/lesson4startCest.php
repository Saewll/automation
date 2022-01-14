<?php

class lesson4startCest
{
     // Тест на поиск блузки в модальном окне на сайте
     public function checkSearch(AcceptanceTester $I)
     {
     
      $I->amOnPage('');
      $I->see('Blouse');
      $I->moveMouseOver('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.product_img_link > img');
      $I->click('#homefeatured > li:nth-child(2)');
      $I->waitForElementVisible('#index > div.fancybox-overlay.fancybox-overlay-fixed');
      $I->switchToIFrame('.fancybox-iframe');
      $I->see('Blouse');
         
     }
}
