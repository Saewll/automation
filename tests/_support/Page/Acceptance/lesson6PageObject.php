<?php
namespace Page\Acceptance;

class lesson6PageObject
{
    /**
    * Урл страницы 
    */
   public static $URL = '';
    /**
    * Выбор поля логина 
    */
   public static $loginInput = '#user-name';

   public  const USER = 'locked_out_user';


   public static $passwordInput = '#password';

   public  const PASSWORD = 'secret_sauce';

   public static $loginErrorBanner = '#login_button_container > div > form > div.error-message-container.error';

   public static $loginButton = '#login-button';

   public static $loginErrorBannerCancel = '#login_button_container > div > form > div.error-message-container.error > h3 > button';

/**
    * @var \AcceptanceTester;
    */
   protected $acceptanceTester;

   public function __construct(\AcceptanceTester $I)
   {
       $this->acceptanceTester = $I;
   }

   public function fillFiledLogin()
   {
       $this->acceptanceTester->fillField(self::$loginInput,self::USER);
       return $this;
   }

   public function fillFiledPassword()
   {
       $this->acceptanceTester->fillField(self::$passwordInput,self::PASSWORD);
       return $this;

   }
   public function clickLoginButton()
   {
       $this->acceptanceTester->click(self::$loginButton);
       return $this;

   }

   public function seeErrorMessage()
   {
       $this->acceptanceTester->seeElement(self::$loginErrorBanner);
       return $this;

   }
   public function clickCancelError()
   {
       $this->acceptanceTester->click(self::$loginErrorBannerCancel);
       return $this;

   }
   public function seeNoError()
   {
       $this->acceptanceTester->dontSeeElement(self::$loginErrorBanner);
       return $this;

   }


}

