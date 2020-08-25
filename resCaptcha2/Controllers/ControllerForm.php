<?php
include("../Class/ClassCaptcha.php");

$ObjCaptcha=new Captcha();
$Retorno=$ObjCaptcha->getCaptcha($_POST['g-recaptcha-response']);


//var_dump($Retorno); //teste
if($Retorno->success == true && $Retorno->score > 0.8){

        // Perform you logic here for ex:- save you data to database
        echo '<div class="alert alert-success">
                        <strong>Success!</strong> Your inquiry successfully submitted.
                  </div>';
        } else {
        echo '<div class="alert alert-warning">
                          <strong>Error!</strong> You are not a human.
                  </div>';
        }

