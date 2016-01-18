<?php

namespace DraperStudio\GetCake\Api;

class Offers extends AbstractApi
{
    public function addLinkCreative($parameters)
    {
        return $this->get('2/offers.asmx/AddLinkCreative', $parameters);
    }

    public function applyForOffer($parameters)
    {
        return $this->get('2/offers.asmx/ApplyForOffer', $parameters);
    }

    public function creativeFeed($parameters)
    {
        return $this->get('2/offers.asmx/CreativeFeed', $parameters);
    }

    public function getCampaign($parameters)
    {
        return $this->get('2/offers.asmx/GetCampaign', $parameters);
    }

    public function getCreativeCode($parameters)
    {
        return $this->get('2/offers.asmx/GetCreativeCode', $parameters);
    }

    public function getCreativeFeeds()
    {
        return $this->get('2/offers.asmx/GetCreativeFeeds');
    }

    public function getCreativeTypes()
    {
        return $this->get('2/offers.asmx/GetCreativeTypes');
    }

    public function getFeaturedOffer()
    {
        return $this->get('2/offers.asmx/GetFeaturedOffer');
    }

    public function getMediaTypeCategories()
    {
        return $this->get('2/offers.asmx/GetMediaTypeCategories');
    }

    public function getOfferStatuses()
    {
        return $this->get('2/offers.asmx/GetOfferStatuses');
    }

    public function getPixelTokens()
    {
        return $this->get('2/offers.asmx/GetPixelTokens');
    }

    public function getSuppressionList()
    {
        return $this->get('2/offers.asmx/GetSuppressionList');
    }

    public function getTags()
    {
        return $this->get('2/offers.asmx/GetTags');
    }

    public function getVerticalCategories()
    {
        return $this->get('2/offers.asmx/GetVerticalCategories');
    }

    public function getVerticals()
    {
        return $this->get('2/offers.asmx/GetVerticals');
    }

    public function getSubAffiliates($parameters)
    {
        return $this->get('2/offers.asmx/GetSubAffiliates', $parameters);
    }

    public function offerFeed($parameters)
    {
        return $this->get('4/offers.asmx/OfferFeed', $parameters);
    }

    public function sendCreativePack($parameters)
    {
        return $this->get('2/offers.asmx/SendCreativePack', $parameters);
    }

    public function setPixel($parameters)
    {
        return $this->get('2/offers.asmx/SetPixel', $parameters);
    }

    public function setPostbackUrl($parameters)
    {
        return $this->get('2/offers.asmx/SetPostbackURL', $parameters);
    }

    public function setTestLink($parameters)
    {
        return $this->get('2/offers.asmx/SetTestLink', $parameters);
    }
}
