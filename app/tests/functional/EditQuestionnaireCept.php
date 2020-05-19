<?php 
$I = new FunctionalTester($scenario);
// This test checks wether editing a questionnaire works
$I->amLoggedAs(['email' => '23932872@edgehill.ac.uk', 'password' => '12345678']); // Sets user as being logged in
$I->wantTo('edit a questionnaire');


// given
$I->amOnPage('/home'); // Starts from the home page
// and
$I->click('Edit Questionnaire'); // Clicks to edit current questionnaire

// then
$I->amOnPage('/questionnaires/1/edit'); // Sets to page with new ID
// and
$I->see('Edit Questionnaire'); // Section should be called Edit Questionnaire

// if
$I->see('Questionnaire Title'); // Checks if Questionnaire Title line Exists
// then
$I->fillField('questionnaireTitle','Questionnaire Design and its use in Research'); // Fill the Title field
// also if
$I->see('Questionnaire Description and Terms'); // Checks if Agreement line Exists
// then
$I->fillField('agreementTerms','This Questionnaires purpose is to understand Questionnaire Design and it uses based on Responses from 
the opinions of other users. By clicking “Complete Questionnaire”, you agree to the terms and conditions of this Agreement, 
and you also agree to Consent in participating in the survey. In this survey, none of your personal information or any data 
regarding to you will be collected and compiled in any way shape, or form, except when collecting the responses that are submitted for 
when participating in this survey. Your anonymity and privacy will be maintained. When participating in this Survey you are not obligated 
to complete it and can abort at any time without any repercussions for pulling out of the survey. Amended'); // Fill the Agreement Field
// and
$I->click('Edit Questionnaire'); // Click to submit changes
// then
// when
$I->amOnPage('/home'); // Sets on homepage
$I->see('Questionnaire Design and its use in Research'); // Check if title is changes

// I couldn't add the test to make edit work for the agreement field. But it should work on the actual website.

//Also
$I->amOnPage('/questionnaires/1'); 
$I->see('Questionnaire Design and its use in Research'); // Check if title is there