<?php

class lesson4startCest
{
     // Тест на поиск блузки в модальном окне на сайте
     public function checkSearch(AcceptanceTester $I)
     {
     
         $I->amOnPage('');
         $I->see('Blouse');
         $I->click('#homefeatured > li:nth-child(2)');
         $I->switchToIFrame('.fancybox-iframe');
         $I->see('Blouse');
         
     }
}
