<?php
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
error_reporting(E_ALL ^ E_WARNING);
$anoAtual = (date('Y') > 2022) ? ' - '.date('Y') : '';

// DEFINE AS CONSTANTES DE CAMINHO E SUAS PASTAS --> PADRAO MVC
define('ROOT', $_SERVER['SERVER_NAME'] == 'localhost' ? '/clientes/abastancacargas.com.br/' : '/');
define('MODEL', $_SERVER['DOCUMENT_ROOT'] . ROOT .'model/');
define('VIEW', $_SERVER['DOCUMENT_ROOT'] . ROOT .'view/template/');
define('CONTROLLER', $_SERVER['DOCUMENT_ROOT'] . ROOT .'controller/');
define('ASSET', ROOT .'view/asset/');
define('IMAGES', ROOT .'images/');

define('SITE_NAME', 'Abastança Cargas');
define('CNPJ_COMPANY', '65.376.619/0001-40');

define('MAIL_HOST', 'mail.abastancacargas.com.br');
define('MAIL_USERNAME', 'site@abastancacargas.com.br');
define('MAIL_PASSWORD', 'D,5MTmPIkWzh');

define('PHONE', '(11) 91367-6006');
define('LINK_PHONE', 'tel:'. str_replace(['(', ')', ' ', '-'], '', PHONE));
define('WHATSAPP', '(11) 91498-7667');
define('WHATSAPP2', '(11) 94507-9494');
define('LINK_WHATSAPP', 'https://api.whatsapp.com/send?phone=55'. str_replace(['(', ')', ' ', '-'], '', WHATSAPP) .'&text=Olá '. SITE_NAME .', quero saber mais');
define('LINK_WHATSAPP2', 'https://api.whatsapp.com/send?phone=55'. str_replace(['(', ')', ' ', '-'], '', WHATSAPP2) .'&text=Olá '. SITE_NAME .', desejo uma cotação de frete!');

define('EMAIL', 'comercial@abastancacargas.com.br');
define('LINK_EMAIL', 'mailto:'. EMAIL);

$gclid = @explode('gclid=', $_SERVER['REQUEST_URI'])[1];
define('ADS', !empty($gclid) ? 1 : 0);

require_once MODEL . 'functions.php';