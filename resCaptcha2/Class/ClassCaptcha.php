<?php
include("../Config/config.php");
class Captcha{
    public function getCaptcha($SecretKey) {
        $Resposta=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$SecretKey}");
        $Retorno= json_decode($Resposta);
        return $Retorno;
    }
}
