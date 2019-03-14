<?php

namespace AlibabaCloud\Uis\V20180821;

use AlibabaCloud\Rpc;

/**
 * Api CreateDnatEntry
 *
 * @method string getDestinationIp()
 * @method string getDestinationPort()
 * @method string getResourceOwnerId()
 * @method string getUisNodeId()
 * @method string getResourceOwnerAccount()
 * @method string getIpProtocol()
 * @method string getOwnerAccount()
 * @method string getName()
 * @method string getOriginalPort()
 * @method string getOwnerId()
 * @method string getOriginalIp()
 */
class CreateDnatEntry extends Rpc
{
    public $product = 'Uis';

    public $version = '2018-08-21';

    public $method = 'POST';

    public $serviceCode = 'uis';

    /**
     * @param string $destinationIp
     *
     * @return $this
     */
    public function withDestinationIp($destinationIp)
    {
        $this->data['DestinationIp'] = $destinationIp;
        $this->options['query']['DestinationIp'] = $destinationIp;

        return $this;
    }

    /**
     * @param string $destinationPort
     *
     * @return $this
     */
    public function withDestinationPort($destinationPort)
    {
        $this->data['DestinationPort'] = $destinationPort;
        $this->options['query']['DestinationPort'] = $destinationPort;

        return $this;
    }

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
     * @param string $uisNodeId
     *
     * @return $this
     */
    public function withUisNodeId($uisNodeId)
    {
        $this->data['UisNodeId'] = $uisNodeId;
        $this->options['query']['UisNodeId'] = $uisNodeId;

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
     * @param string $ipProtocol
     *
     * @return $this
     */
    public function withIpProtocol($ipProtocol)
    {
        $this->data['IpProtocol'] = $ipProtocol;
        $this->options['query']['IpProtocol'] = $ipProtocol;

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
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @param string $originalPort
     *
     * @return $this
     */
    public function withOriginalPort($originalPort)
    {
        $this->data['OriginalPort'] = $originalPort;
        $this->options['query']['OriginalPort'] = $originalPort;

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
     * @param string $originalIp
     *
     * @return $this
     */
    public function withOriginalIp($originalIp)
    {
        $this->data['OriginalIp'] = $originalIp;
        $this->options['query']['OriginalIp'] = $originalIp;

        return $this;
    }
}
