<?php

namespace DraperStudio\GetCake\Api;

class ReportsLiteClicks extends AbstractApi
{
    public function campaignSummary($parameters)
    {
        return $this->get('1/reports_lite_clicks.asmx/CampaignSummary', $parameters);
    }

    public function dailySummary($parameters)
    {
        return $this->get('1/reports_lite_clicks.asmx/DailySummary', $parameters);
    }

    public function hourlySummary($parameters)
    {
        return $this->get('1/reports_lite_clicks.asmx/HourlySummary', $parameters);
    }

    public function subAffiliateSummary($parameters)
    {
        return $this->get('1/reports_lite_clicks.asmx/SubAffiliateSummary', $parameters);
    }
}
