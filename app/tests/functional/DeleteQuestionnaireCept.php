<?php 
$I = new FunctionalTester($scenario);

// The purpose of this test is to check if the delete questionnaire feature works
$I->amLoggedAs(['email' => '23932872@edgehill.ac.uk', 'password' => '12345678']); // Sets it to be logged in as user
$I->wantTo('delete a questionnaire');

$I->amOnPage('/home'); // Sets it to be in home page
$I->click('Delete Questionnaire'); // Thif button should delete the Questionnaire

// I could not figure out how to create the delete test properly but should work on the website otherwise

$I->DontSee('Questionnaire Design and its use in Research'); // The following Lines should not be seen as the questuonnaire should be deleted.
$I->DontSee('Example Agreement Amended');