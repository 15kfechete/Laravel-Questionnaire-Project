<?php 
$I = new FunctionalTester($scenario);

// This test checks wether creating a questionnaire works
$I->amLoggedAs(['email' => '23932872@edgehill.ac.uk', 'password' => '12345678']); // Sets user as being logged in
$I->wantTo('create a new questionnaire');

// given
$I->amOnPage('/home'); // starts on the home page
// and
$I->see('Dashboard'); // checks if dashboard line exists
// then
$I->click('Create New Questionnaire'); // click on the Create New Questionnaire Button to return the Creation View

// when
$I->amOnPage('/questionnaires/create'); // Returns the Questionnaires Create Page
// and
$I->see('Create New Questionnaire'); // check if the linke exists

// when
$I->see('Questionnaire Title'); // Checks if the Questionnaire Title line exists
// then
$I->fillField('questionnaireTitle','Questionnaire Design and its use in Research'); // Fill field for the Title

// also
$I->see('Questionnaire Description and Terms');
// then
$I->fillField('agreementTerms','This Questionnaires purpose is to understand Questionnaire Design and it uses based on Responses from 
the opinions of other users. By clicking “Complete Questionnaire”, you agree to the terms and conditions of this Agreement, 
and you also agree to Consent in participating in the survey. In this survey, none of your personal information or any data 
regarding to you will be collected and compiled in any way shape, or form, except when collecting the responses that are submitted for 
when participating in this survey. Your anonymity and privacy will be maintained. When participating in this Survey you are not obligated 
to complete it and can abort at any time without any repercussions for pulling out of the survey.'); // Fill Field for tge Agreement
// and
$I->click('Create Questionnaire'); // Creates the Questionnaire based upon the inputted fields

// when
$I->amOnPage('/home'); // Checks on home page
// then     // The following fields are to demonstrate wether the created questionnaire exists, by investigating wether created fields are rendered on homepage.
$I->see('Questionnaire Design and its use in Research');
$I->see('This Questionnaires purpose is to understand Questionnaire Design and it uses based on Responses from 
the opinions of other users. By clicking “Complete Questionnaire”, you agree to the terms and conditions of this Agreement, 
and you also agree to Consent in participating in the survey. In this survey, none of your personal information or any data 
regarding to you will be collected and compiled in any way shape, or form, except when collecting the responses that are submitted for 
when participating in this survey. Your anonymity and privacy will be maintained. When participating in this Survey you are not obligated 
to complete it and can abort at any time without any repercussions for pulling out of the survey.');

//Also
$I->amOnPage('/questionnaires/1'); // Check on Questionnaire Page
$I->see('Questionnaire Design and its use in Research'); // Check if the Questionnaire Title exists.
