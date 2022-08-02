<?php
include dirname( __FILE__ ) . '/vendor/autoload.php';
use Gregwar\Captcha\PhraseBuilder;

// We need the session to check the phrase after submitting
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Checking that the posted phrase match the phrase stored in the session
	if (isset($_SESSION['phrase']) && PhraseBuilder::comparePhrases($_SESSION['phrase'], $_POST['phrase'])) {
		echo "<h1>Captcha is valid !</h1>";
	} else {
		echo "<h1>Captcha is not valid!</h1>";
	}
	// The phrase can't be used twice
	unset($_SESSION['phrase']);
}
