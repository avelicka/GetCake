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
 * Class ReportsLiteClicks.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class ReportsLiteClicks extends AbstractApi
{
    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function campaignSummary($parameters)
    {
        return $this->get('1/reports_lite_clicks.asmx/CampaignSummary', $parameters);
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function dailySummary($parameters)
    {
        return $this->get('1/reports_lite_clicks.asmx/DailySummary', $parameters);
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function hourlySummary($parameters)
    {
        return $this->get('1/reports_lite_clicks.asmx/HourlySummary', $parameters);
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function subAffiliateSummary($parameters)
    {
        return $this->get('1/reports_lite_clicks.asmx/SubAffiliateSummary', $parameters);
    }
}
