<?php

use Helper\Functional;

class ArticlePageCest
{
    
    // tests
    public function checkPostMethod(FunctionalTester $I)
    {
    $defaultSchema=['data'=>[
        'id'=>'integer',
        'email'=>'string',
        'first_name'=>'string',
        'last_name'=>'string',
        'avatar'=>'string'
    ],
    'support'=>[
        'url'=>'string',
        'text'=>'string'
    ]


    ];
    $userData=[
        'name'=> $I->getFaker()->name,
        'job'=>$I->getFaker()->company
    ];
    $I->haveHttpHeader('Content-Type','application/json');
    $I->sendPost('users',$userData);
    $I->seeResponseCodeIs('201');
    $I->seeResponseMatchesJsonType([
        'name'=>'string',
        'job'=>'string',
        'id'=>'string',
        'createdAt'=>'string'
    ]);
    $I->sendGet('users/2',$userData);
    $I->seeResponseMatchesJsonType($defaultSchema);



    }


}