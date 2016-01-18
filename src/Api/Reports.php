<?php

namespace DraperStudio\GetCake\Api;

class Reports extends AbstractApi
{
    public function bills($parameters)
    {
        return $this->get('3/reports.asmx/Bills', $parameters);
    }

    public function campaignSummary($parameters)
    {
        return $this->get('5/reports.asmx/CampaignSummary', $parameters);
    }

    public function clicks($parameters)
    {
        return $this->get('8/reports.asmx/Clicks', $parameters);
    }

    public function conversions($parameters)
    {
        return $this->get('8/reports.asmx/Conversions', $parameters);
    }

    public function dailySummary($parameters)
    {
        return $this->get('2/reports.asmx/DailySummary', $parameters);
    }

    public function hourlySummary($parameters)
    {
        return $this->get('2/reports.asmx/HourlySummary', $parameters);
    }

    public function networkNews($parameters)
    {
        return $this->get('2/reports.asmx/NetworkNews', $parameters);
    }

    public function offerCompliance($parameters)
    {
        return $this->get('3/reports.asmx/OfferCompliance', $parameters);
    }

    public function orderDetails($parameters)
    {
        return $this->get('2/reports.asmx/OrderDetails', $parameters);
    }

    public function orderDetailChanges($parameters)
    {
        return $this->get('2/reports.asmx/OrderDetailChanges', $parameters);
    }

    public function performanceSummary($parameters)
    {
        return $this->get('2/reports.asmx/PerformanceSummary', $parameters);
    }

    public function topOfferSummary($parameters)
    {
        return $this->get('2/reports.asmx/TopOfferSummary', $parameters);
    }
}
