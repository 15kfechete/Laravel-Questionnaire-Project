<?php 
$I = new FunctionalTester($scenario);

$I->amLoggedAs(['email' => '15kfechete@gmail.com', 'password' => '12345678']);
$I->wantTo('create a new questionnaire');

$I->amOnPage('/home');
$I->see('Dashboard');
$I->click('Create New Questionnaire');

$I->amOnPage('/questionnaires/create');
$I->see('Create New Questionnaire');

$I->see('Questionnaire Title');
$I->fillField('questionnaireTitle','Example Title');

$I->see('Questionnaire Description and Terms');
$I->fillField('agreementTerms','Example Agreement');

$I->click('Create Questionnaire');

$I->amOnPage('/home');
$I->see('Example Title');
$I->see('Example Agreement');

//Also
$I->amOnPage('/questionnaires/9');
$I->see('Example Title');





