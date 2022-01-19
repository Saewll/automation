<?php
namespace Page\Acceptance;

class lesson7Habr
{
    // include url of current page
    public static $URL = '';

    // include url of current page
    public static $categories="//a[contains(text(),'%s')]";
    public static $categoryHeader="//h1[contains(text(),'%s')]";

     
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
