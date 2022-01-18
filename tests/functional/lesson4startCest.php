<?php

use Helper\Functional;

class ArticlePageCest
{
    
    // tests
    public function checkArticlePageList(FunctionalTester $I)
    {
    $clickSearchFIeldCss='#search_query_top';
    $clickSEarchButtonCss='#searchbox > button';
    $seeNumberOfElementsCss='.product-container';
    
    $seeElementXPath='//input[@id="search_query_top"]';
    $clickSEarchButtonXPath='//form[@id="searchbox"]//button';
    $seeNumberOfElementsCss='//div[@class="product-container"]';






        $I->amOnPage('');
        $I->seeElement('#search_query_top');      
        $I->click('#search_query_top');
        $I->fillField('#search_query_top','Printed dress');
        $I->click('#searchbox > button');
        $I->seeNumberOfElements('.product-container',5);



    }


}