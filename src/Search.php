<?php

namespace Wead\DigitalCep;

use Wead\DigitalCep\ws\ViaCep;

class Search
{
    public function getAddressFromZipcode(string $zipCode): array
    {
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

        $get = file_get_contents($this->url . $zipCode . "/json");

        print_r($get);

        return $this->getFromServer($zipCode);
    }

    private function getFromServer(string $zipCode): array
    {
        $get = new ViaCep();

        return $get->get($zipCode);
    }

    private function processData($data)
    {
        foreach ($data as $k => $v) {
            $data[$k] = trim($v);
        }

        return $data;
    }
}
?>