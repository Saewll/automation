<?php

use Faker\Factory;
use Helper\CustomFakerProvider;
use Page\Acceptance\lesson7DYnamicData;

class lesson7DynamicDataCest
{
   

    // Тест на заполнение данных карты и успешной оплаты
    public function fillCard(AcceptanceTester $I)
    {
       
        $faker=Factory::create('ru_RU');
        $faker->addProvider(new CustomFakerProvider($faker));
        $firstName=$faker->firstName;
        $lastName=$faker->lastName;
        $email=$faker->email;
        $phone=$faker->phoneNumber;
        $street=$faker->streetAddress;
        $city=$faker->city;
        $state=$faker->city;
        $postcode=$faker->postcode;
        $cardFirstName=$faker->firstName;
        $cardLastName=$faker->firstName;
        $cardNumber=$I->getFaker()->getCards;
        $cardSecurity=$faker->creditCardNumber;
        

        $I->amOnPage(lesson7DYnamicData::$URL);
        $I->fillField(lesson7DYnamicData::$firstName,$firstName);
        $I->fillField(lesson7DYnamicData::$lastName,$lastName);
        $I->fillField(lesson7DYnamicData::$email,$email);
        $I->fillField(lesson7DYnamicData::$phone,$phone);
        $I->fillField(lesson7DYnamicData::$street,$street);
        $I->fillField(lesson7DYnamicData::$city,$city);
        $I->fillField(lesson7DYnamicData::$state,$state);
        $I->fillField(lesson7DYnamicData::$postcode,$postcode);
        $I->click(lesson7DYnamicData::$clickPaymentCredit);
        $I->fillField(lesson7DYnamicData::$cardFirstName,$cardFirstName);
        $I->fillField(lesson7DYnamicData::$cardLastName,$cardLastName);
        $I->fillField(lesson7DYnamicData::$cardNumber,$cardNumber);
        $I->fillField(lesson7DYnamicData::$cardSecurity,$cardSecurity);
        $I->click(lesson7DYnamicData::$registerButton);
        $I->waitForText('Good job');

    }


}