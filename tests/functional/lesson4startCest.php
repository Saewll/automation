<?php

use Helper\Functional;

class ArticlePageCest
{

    // tests
    public function checkArticlePageList(FunctionalTester $I)
    {
        $I->amOnPage('');
        $I->seeElement('#search_query_top');      
        $I->click('#search_query_top');
        $I->fillField('#search_query_top','Printed dress');
        $I->click('#searchbox > button');
        $I->seeNumberOfElements('.product-container',5);



    }


}