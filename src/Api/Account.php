<?php

/*
 * This file is part of GetCake PHP Client.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\GetCake\Api;

/**
 * Class Account.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Account extends AbstractApi
{
    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function changeAccountInfo($parameters)
    {
        return $this->get('2/account.asmx/ChangeAccountInfo', $parameters);
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function changeLanguage($parameters)
    {
        return $this->get('2/account.asmx/ChangeLanguage', $parameters);
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function changeMediaTypes($parameters)
    {
        return $this->get('2/account.asmx/ChangeMediaTypes', $parameters);
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function changePriceFormats($parameters)
    {
        return $this->get('2/account.asmx/ChangePriceFormats', $parameters);
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function changeVerticalCategories($parameters)
    {
        return $this->get('2/account.asmx/ChangeVerticalCategories', $parameters);
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function getAccountInfo($parameters)
    {
        return $this->get('2/account.asmx/GetAccountInfo', $parameters);
    }

    /**
     * @return mixed
     */
    public function getAccountManager()
    {
        return $this->get('2/account.asmx/GetAccountManager');
    }

    /**
     * @return mixed
     */
    public function getContactTypes()
    {
        return $this->get('2/account.asmx/GetContactTypes');
    }

    /**
     * @return mixed
     */
    public function getCountries()
    {
        return $this->get('2/account.asmx/GetCountries');
    }

    /**
     * @return mixed
     */
    public function getLanguages()
    {
        return $this->get('2/account.asmx/GetLanguages');
    }

    /**
     * @return mixed
     */
    public function getMediaTypes()
    {
        return $this->get('2/account.asmx/GetMediaTypes');
    }

    /**
     * @return mixed
     */
    public function getPaymentToTypes()
    {
        return $this->get('2/account.asmx/GetPaymentToTypes');
    }

    /**
     * @return mixed
     */
    public function getPriceFormats()
    {
        return $this->get('2/account.asmx/GetPriceFormats', $parameters);
    }

    /**
     * @return mixed
     */
    public function getTaxClasses()
    {
        return $this->get('2/account.asmx/GetTaxClasses');
    }

    /**
     * @return mixed
     */
    public function getUsStates()
    {
        return $this->get('2/account.asmx/GetUSStates');
    }

    /**
     * @return mixed
     */
    public function getVerticalCategories()
    {
        return $this->get('2/account.asmx/GetVerticalCategories');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function resetPassword($parameters)
    {
        return $this->get('2/account.asmx/ResetPassword', $parameters);
    }
}
