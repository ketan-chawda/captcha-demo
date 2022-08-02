<?php

include dirname( __FILE__ ) . '/vendor/autoload.php';

use Gregwar\Captcha\CaptchaBuilder;

$builder = new CaptchaBuilder;
$builder->build();
?>

<div class="elem-group">
    <form action="verify.php" method="post">
        <label for="captcha">Please Enter the Captcha Text</label>
        <img src="captcha.php" alt="captcha loading"/>
        <i class="fas fa-redo refresh-captcha"></i>
        <br>
        <label for="phrase"></label>
        <input type="text" id="phrase" name="phrase">
        <input type="submit"/>
    </form>
</div>
