<?php

/*
 * This file is part of GetCake PHP Client.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Apivore\GetCake\Api;

/**
 * Class Get.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Get extends AbstractApi
{
    /**
     * @return mixed
     */
    public function getCurrencies()
    {
        return $this->get('2/get.asmx/GetCurrencies');
    }

    /**
     * @return mixed
     */
    public function getDispositionTypes()
    {
        return $this->get('3/get.asmx/GetDispositionTypes');
    }
}
