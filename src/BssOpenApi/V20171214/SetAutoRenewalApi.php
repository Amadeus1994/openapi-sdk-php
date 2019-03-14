<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Rpc;

/**
 * Api SetAutoRenewalApi
 *
 * @method string getProductCode()
 * @method string getInstanceIDs()
 * @method string getSubscriptionType()
 * @method string getRenewalPeriodUnit()
 * @method string getRenewalPeriod()
 * @method string getIsAutoRenewal()
 * @method string getOwnerId()
 * @method string getProductType()
 */
class SetAutoRenewalApi extends Rpc
{
    public $product = 'BssOpenApi';

    public $version = '2017-12-14';

    public $method = 'POST';

    /**
     * @param string $productCode
     *
     * @return $this
     */
    public function withProductCode($productCode)
    {
        $this->data['ProductCode'] = $productCode;
        $this->options['query']['ProductCode'] = $productCode;

        return $this;
    }

    /**
     * @param string $instanceIDs
     *
     * @return $this
     */
    public function withInstanceIDs($instanceIDs)
    {
        $this->data['InstanceIDs'] = $instanceIDs;
        $this->options['query']['InstanceIDs'] = $instanceIDs;

        return $this;
    }

    /**
     * @param string $subscriptionType
     *
     * @return $this
     */
    public function withSubscriptionType($subscriptionType)
    {
        $this->data['SubscriptionType'] = $subscriptionType;
        $this->options['query']['SubscriptionType'] = $subscriptionType;

        return $this;
    }

    /**
     * @param string $renewalPeriodUnit
     *
     * @return $this
     */
    public function withRenewalPeriodUnit($renewalPeriodUnit)
    {
        $this->data['RenewalPeriodUnit'] = $renewalPeriodUnit;
        $this->options['query']['RenewalPeriodUnit'] = $renewalPeriodUnit;

        return $this;
    }

    /**
     * @param string $renewalPeriod
     *
     * @return $this
     */
    public function withRenewalPeriod($renewalPeriod)
    {
        $this->data['RenewalPeriod'] = $renewalPeriod;
        $this->options['query']['RenewalPeriod'] = $renewalPeriod;

        return $this;
    }

    /**
     * @param string $isAutoRenewal
     *
     * @return $this
     */
    public function withIsAutoRenewal($isAutoRenewal)
    {
        $this->data['IsAutoRenewal'] = $isAutoRenewal;
        $this->options['query']['IsAutoRenewal'] = $isAutoRenewal;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $productType
     *
     * @return $this
     */
    public function withProductType($productType)
    {
        $this->data['ProductType'] = $productType;
        $this->options['query']['ProductType'] = $productType;

        return $this;
    }
}
