<?php
namespace Page\Acceptance;

class lesson7DYnamicData
{
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


    // include url of current page
    public static $URL = '';
    public static $firstName = '#firstName';
    public static $lastName = '#lastName';
    public static $email = '#input_38';
    public static $phone = '#phoneNumber';
    public static $street = '#address';
    public static $city = '#city';
    public static $state = '#state';
    public static $postcode = '#postal';
    public static $clickPaymentCredit = '#input_32_paymentType_credit';
    public static $cardFirstName = '#input_32_cc_firstName';
    public static $cardLastName = '#input_32_cc_lastName';
    public static $cardNumber = '#input_32_cc_number';
    public static $cardSecurity = '#input_32_cc_ccv';
    public static $registerButton='#input_36';
    

    
}
