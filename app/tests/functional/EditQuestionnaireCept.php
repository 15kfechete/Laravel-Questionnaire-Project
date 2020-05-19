<?php 
$I = new FunctionalTester($scenario);

$I->amLoggedAs(['email' => '15kfechete@gmail.com', 'password' => '12345678']);
$I->wantTo('edit a questionnaire');

$I->amOnPage('/home');
$I->click('Edit Questionnaire');

$I->amOnPage('/questionnaires/9/edit');
$I->see('Edit Questionnaire');

$I->see('Questionnaire Title');
$I->fillField('questionnaireTitle','Example Title Amended');

$I->see('Questionnaire Description and Terms');
$I->fillField('agreementTerms','Example Agreement Amended');

$I->click('Edit Questionnaire');

$I->amOnPage('/home');
$I->see('Example Title Amended');
$I->see('Example Agreement Amended');

//Also
$I->amOnPage('/questionnaires/9');
$I->see('Example Title Amended');