<?php
namespace Page\Acceptance;

class lesson9StepObjectListing
{
    // include url of current page
    public static $URL = 'https://avtoelon.uz/avto/?price-currency=1';
    public static $favouriteButtonOnCard='//div[@id="results"]//div[contains(@class,"list-item") and @data-id][%s]//i[contains(@class,"fi-star")]';
    public static $counterFavorite='//sup[contains(@class, "js-header-favorites-count")]';
    public static $fvouritePage='//span[contains(text(),"Избранное")]';
    
    
    
    
    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
