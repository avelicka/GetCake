<?php

namespace DraperStudio\GetCake\Api;

class Get extends AbstractApi
{
    public function getCurrencies()
    {
        return $this->get('2/get.asmx/GetCurrencies');
    }

    public function getDispositionTypes()
    {
        return $this->get('3/get.asmx/GetDispositionTypes');
    }
}
