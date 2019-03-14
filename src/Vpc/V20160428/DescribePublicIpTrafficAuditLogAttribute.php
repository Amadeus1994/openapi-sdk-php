<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * Api DescribePublicIpTrafficAuditLogAttribute
 *
 * @method string getResourceOwnerId()
 * @method string getPublicIpAddress()
 * @method string getResourceOwnerAccount()
 * @method string getPublicIpType()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 */
class DescribePublicIpTrafficAuditLogAttribute extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $publicIpAddress
     *
     * @return $this
     */
    public function withPublicIpAddress($publicIpAddress)
    {
        $this->data['PublicIpAddress'] = $publicIpAddress;
        $this->options['query']['PublicIpAddress'] = $publicIpAddress;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $publicIpType
     *
     * @return $this
     */
    public function withPublicIpType($publicIpType)
    {
        $this->data['PublicIpType'] = $publicIpType;
        $this->options['query']['PublicIpType'] = $publicIpType;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

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
}
