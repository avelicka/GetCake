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
 * Class Offers.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Offers extends AbstractApi
{
    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function addLinkCreative($parameters)
    {
        return $this->get('2/offers.asmx/AddLinkCreative', $parameters);
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function applyForOffer($parameters)
    {
        return $this->get('2/offers.asmx/ApplyForOffer', $parameters);
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function creativeFeed($parameters)
    {
        return $this->get('2/offers.asmx/CreativeFeed', $parameters);
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function getCampaign($parameters)
    {
        return $this->get('2/offers.asmx/GetCampaign', $parameters);
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function getCreativeCode($parameters)
    {
        return $this->get('2/offers.asmx/GetCreativeCode', $parameters);
    }

    /**
     * @return mixed
     */
    public function getCreativeFeeds()
    {
        return $this->get('2/offers.asmx/GetCreativeFeeds');
    }

    /**
     * @return mixed
     */
    public function getCreativeTypes()
    {
        return $this->get('2/offers.asmx/GetCreativeTypes');
    }

    /**
     * @return mixed
     */
    public function getFeaturedOffer()
    {
        return $this->get('2/offers.asmx/GetFeaturedOffer');
    }

    /**
     * @return mixed
     */
    public function getMediaTypeCategories()
    {
        return $this->get('2/offers.asmx/GetMediaTypeCategories');
    }

    /**
     * @return mixed
     */
    public function getOfferStatuses()
    {
        return $this->get('2/offers.asmx/GetOfferStatuses');
    }

    /**
     * @return mixed
     */
    public function getPixelTokens()
    {
        return $this->get('2/offers.asmx/GetPixelTokens');
    }

    /**
     * @return mixed
     */
    public function getSuppressionList()
    {
        return $this->get('2/offers.asmx/GetSuppressionList');
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->get('2/offers.asmx/GetTags');
    }

    /**
     * @return mixed
     */
    public function getVerticalCategories()
    {
        return $this->get('2/offers.asmx/GetVerticalCategories');
    }

    /**
     * @return mixed
     */
    public function getVerticals()
    {
        return $this->get('2/offers.asmx/GetVerticals');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function getSubAffiliates($parameters)
    {
        return $this->get('2/offers.asmx/GetSubAffiliates', $parameters);
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function offerFeed($parameters)
    {
        return $this->get('4/offers.asmx/OfferFeed', $parameters);
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function sendCreativePack($parameters)
    {
        return $this->get('2/offers.asmx/SendCreativePack', $parameters);
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function setPixel($parameters)
    {
        return $this->get('2/offers.asmx/SetPixel', $parameters);
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function setPostbackUrl($parameters)
    {
        return $this->get('2/offers.asmx/SetPostbackURL', $parameters);
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function setTestLink($parameters)
    {
        return $this->get('2/offers.asmx/SetTestLink', $parameters);
    }
}
