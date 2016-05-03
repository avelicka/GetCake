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
 * Class Reports.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Reports extends AbstractApi
{
    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function bills($parameters)
    {
        return $this->get('3/reports.asmx/Bills', $parameters);
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function campaignSummary($parameters)
    {
        return $this->get('5/reports.asmx/CampaignSummary', $parameters);
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function clicks($parameters)
    {
        return $this->get('8/reports.asmx/Clicks', $parameters);
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function conversions($parameters)
    {
        return $this->get('8/reports.asmx/Conversions', $parameters);
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function dailySummary($parameters)
    {
        return $this->get('2/reports.asmx/DailySummary', $parameters);
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function hourlySummary($parameters)
    {
        return $this->get('2/reports.asmx/HourlySummary', $parameters);
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function networkNews($parameters)
    {
        return $this->get('2/reports.asmx/NetworkNews', $parameters);
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function offerCompliance($parameters)
    {
        return $this->get('3/reports.asmx/OfferCompliance', $parameters);
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function orderDetails($parameters)
    {
        return $this->get('2/reports.asmx/OrderDetails', $parameters);
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function orderDetailChanges($parameters)
    {
        return $this->get('2/reports.asmx/OrderDetailChanges', $parameters);
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function performanceSummary($parameters)
    {
        return $this->get('2/reports.asmx/PerformanceSummary', $parameters);
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function topOfferSummary($parameters)
    {
        return $this->get('2/reports.asmx/TopOfferSummary', $parameters);
    }
}
