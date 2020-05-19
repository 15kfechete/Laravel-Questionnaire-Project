<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('test wether accessing the questionnaires publicly still works');
// The purpose of this test is to test wether accessing the public section of the Questionnaire Works
// If it works it should lead to accessing a questionnaire that was created from the Welcome View

// given
$I->amOnPage('/'); // Welcome Page
$I->see('Private Access'); // Private Section Title
$I->see('Access Questionnaires'); // Private Section Button

// and
$I->see('Public Access'); // Public Section Title
$I->click('View Public Questionnaires'); // Public Section Button

// then
$I->amOnPage('/respondents'); // Respondents Page

// when
$I->see('Questionnaire Design and its use in Research'); // Questionnaire Title from a Questionnaire
// and
$I->see('Description, Terms and Agreements'); // Questionnaire Description and Agreements from a Questionnaire
// and
$I->see('Click here please to participate in the survey'); // Indication line
// then
$I->click('Complete Survey'); // Link to participate in survey

// then
$I->amOnPage('/surveys/1-questionnaire-design-and-its-use-in-research'); // Survey Page

