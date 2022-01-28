<?php

use Page\Acceptance\lesson6PageObject;

class lesson6PageObjectCest
{
   

    // Тест на проверку ввода неверного пароля 
    public function failedLogin(AcceptanceTester $I)
    {
        $failedLogin= new lesson6PageObject($I);
        $I->amOnPage(lesson6PageObject::$URL);
        $failedLogin->fillFiledLogin()->fillFiledPassword()
        ->clickLoginButton()->seeErrorMessage()->clickCancelError()
        ->seeNoError();
    }


}