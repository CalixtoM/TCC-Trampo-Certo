<?php

//Necessário testar em dominio com SSL
define("URL", "https://localhost/trampo/");

$sandbox = true;
if($sandbox){
    define("EMAIL_PAGSEGURO", "miguel_mco@hotmail.com");
    define("TOKEN_PAGSEGURO", "016AD31152884749AE896D9097529E51");
    define("URL_PAGSEGURO", "https://ws.sandbox.pagseguro.uol.com.br/v2/");
    define("SCRIPT_PAGSEGURO", "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
}else{
    define("EMAIL_PAGSEGURO", "miguel_mco@hotmail.com");
    define("TOKEN_PAGSEGURO", "f030adb2-3988-4669-aa25-270807d4a3a1756a9edc41ee82a79448b059d8950056599e-dc57-4b9b-9823-258a135a84e1");
    define("URL_PAGSEGURO", "https://ws.pagseguro.uol.com.br/v2/");
    define("SCRIPT_PAGSEGURO", "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
}
?>