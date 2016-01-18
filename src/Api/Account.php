<?php

namespace DraperStudio\GetCake\Api;

class Account extends AbstractApi
{
    public function changeAccountInfo($parameters)
    {
        return $this->get('2/account.asmx/ChangeAccountInfo', $parameters);
    }

    public function changeLanguage($parameters)
    {
        return $this->get('2/account.asmx/ChangeLanguage', $parameters);
    }

    public function changeMediaTypes($parameters)
    {
        return $this->get('2/account.asmx/ChangeMediaTypes', $parameters);
    }

    public function changePriceFormats($parameters)
    {
        return $this->get('2/account.asmx/ChangePriceFormats', $parameters);
    }

    public function changeVerticalCategories($parameters)
    {
        return $this->get('2/account.asmx/ChangeVerticalCategories', $parameters);
    }

    public function getAccountInfo($parameters)
    {
        return $this->get('2/account.asmx/GetAccountInfo', $parameters);
    }

    public function getAccountManager()
    {
        return $this->get('2/account.asmx/GetAccountManager');
    }

    public function getContactTypes()
    {
        return $this->get('2/account.asmx/GetContactTypes');
    }

    public function getCountries()
    {
        return $this->get('2/account.asmx/GetCountries');
    }

    public function getLanguages()
    {
        return $this->get('2/account.asmx/GetLanguages');
    }

    public function getMediaTypes()
    {
        return $this->get('2/account.asmx/GetMediaTypes');
    }

    public function getPaymentToTypes()
    {
        return $this->get('2/account.asmx/GetPaymentToTypes');
    }

    public function getPriceFormats()
    {
        return $this->get('2/account.asmx/GetPriceFormats', $parameters);
    }

    public function getTaxClasses()
    {
        return $this->get('2/account.asmx/GetTaxClasses');
    }

    public function getUsStates()
    {
        return $this->get('2/account.asmx/GetUSStates');
    }

    public function getVerticalCategories()
    {
        return $this->get('2/account.asmx/GetVerticalCategories');
    }

    public function resetPassword($parameters)
    {
        return $this->get('2/account.asmx/ResetPassword', $parameters);
    }
}
