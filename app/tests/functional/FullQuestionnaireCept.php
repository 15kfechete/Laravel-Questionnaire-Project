<?php 
$I = new FunctionalTester($scenario);

$I->amLoggedAs(['email' => '15kfechete@gmail.com', 'password' => '12345678']);
$I->wantTo('test wether creating every aspect of questionnaire works');

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

$I->amOnPage('/questionnaires/9');
$I->see('Example Title');
$I->click('Create New Question');

$I->amOnPage('/questionnaires/9/questions/create');
$I->see('Question Input');

$I->see('Choices');

$I->see('Choice 1');
$I->see('Choice 2');
$I->see('Choice 3');
$I->see('Choice 4');

$I->click('Submit Question');

$I->amOnPage('/questionnaires/9');
$I->see('Example');
$I->see('answer1');
$I->see('answer2');
$I->see('answer3');
$I->see('answer4');