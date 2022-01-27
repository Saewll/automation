<?php

use Codeception\Example;
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
    /**
     * @dataProvider cases
     * @param Example $data
     */
    public function negativeCheck(FunctionalTester $I,Example $data){
        $name=$I->getFaker()->name;
        $job=$I->getFaker()->company;
        $I->sendPost('users',[$data['name'] ? $name : null,$data['job'] ? $job :null]);


        
    }

    /**
     * @dataProvider cases
     * @param Example $data
     */
    public function checkPutMethod(FunctionalTester $I,Example $data){
        $name=$I->getFaker()->name;
        $job=$I->getFaker()->company;
        $I->sendPut('users/2',[$name,$job]);
        $I->seeResponseMatchesJsonType([
            'updatedAt'=>'string'
        ]);
        $I->sendGet('users/2',['name'=>$name,'job'=>$job]);
        $I->canSeeResponseCodeIs('200');
        $I->sendDelete('users/2',['name'=>$name,'job'=>$job]);
        $I->canSeeResponseCodeIs('204');

        
        

    }

 
        
        

    


    protected function cases(){

        return [
            [
                'name'=>true,
                'job'=>false
                
            ],
            [
                'name'=>false,
                'job'=>true
            ]
            ];
    }


  


}