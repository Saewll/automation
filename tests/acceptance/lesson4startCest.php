<?php

class lesson4startCest
{
     // Тест на поиск блузки в модальном окне на сайте
     public function checkSearch(AcceptanceTester $I)
     {
      $moveMouseOberCss='img[alt="Blouse" ]';
      $clickCss='#homefeatured > li:nth-child(2)';
      $waitForElementVisibleCss='#index > div.fancybox-overlay.fancybox-overlay-fixed';
      $switchToIframeCss='.fancybox-iframe';
      $moveMouseOberXPath='//img[@title="Blouse"]';
      $clickXPath='//*[@id="homefeatured"]/li[2]';
      $waitForElementVisibleXPath='//*[@id="index"]/div[2]';
      $switchToIframeXPath='//*[@class="fancybox-iframe"]';
      







      $I->amOnPage('');
      $I->see('Blouse');
      $I->moveMouseOver('img[alt="Blouse" ]');
      $I->click('#homefeatured > li:nth-child(2)');
      $I->waitForElementVisible('#index > div.fancybox-overlay.fancybox-overlay-fixed');
      $I->switchToIFrame('.fancybox-iframe');
      $I->see('Blouse');
         
     }
}
