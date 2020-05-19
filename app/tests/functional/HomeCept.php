<?php 
$I = new FunctionalTester($scenario);
// The purpose of this test is to test wether the home page of the website works.

$I->amLoggedAs(['email' => '23932872@edgehill.ac.uk', 'password' => '12345678']); // marks user as logged in
$I->wantTo('test homepage is working');

// when
$I->amOnPage('/home'); // sets it in the home page
// and
$I->seeInCurrentUrl('/home'); // checks if the home page url is there

// then
$I->see('Dashboard'); // checks if the dashboard line exists
$I->see('Create New Questionnaire'); // checks if the Create Questionnaire button exists
// and
$I->see('Questionnaire Design and its use in Research'); // checks if the Questionnaire Title Line exists
$I->see('Private'); // checks if the Private Title Line exists
$I->see('Access Questionnaire'); // checks if the Access questionnaire Button exists
$I->see('Public'); // checks if the Public Title Line exists
$I->see('Link:'); // checks if the public ink exists
// and
$I->see('Delete Questionnaire'); // checks if the Delete Button Exists
$I->see('Edit Questionnaire'); // checks if the Edit Button Exists





