<?php 

require_once "vendor/autoload.php";

use \Wead\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipCode('06820071');

print_r($resultado)

?>
