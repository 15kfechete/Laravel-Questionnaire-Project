<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('test wether accessing the questionnaires publicly still works');

$I->amOnPage('/');
$I->see('Private Access');
$I->see('Access Questionnaires');

$I->see('Public Access');
$I->click('View Public Questionnaires');

$I->amOnPage('/questionnaires/9/questions/create');
$I->see('Question Input');

$I->amOnPage('/respondents');

$I->see('Lorem Ipsum');
$I->see('Description, Terms and Agreements');
$I->see('Click here please to participate in the survey');
$I->click('Complete Survey');
