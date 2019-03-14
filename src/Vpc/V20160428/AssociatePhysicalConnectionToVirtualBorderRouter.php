<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * Api AssociatePhysicalConnectionToVirtualBorderRouter
 *
 * @method string getResourceOwnerId()
 * @method string getCircuitCode()
 * @method string getVlanId()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getVbrId()
 * @method string getOwnerId()
 * @method string getPeerGatewayIp()
 * @method string getPeeringSubnetMask()
 * @method string getPhysicalConnectionId()
 * @method string getLocalGatewayIp()
 */
class AssociatePhysicalConnectionToVirtualBorderRouter extends Rpc
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
     * @param string $circuitCode
     *
     * @return $this
     */
    public function withCircuitCode($circuitCode)
    {
        $this->data['CircuitCode'] = $circuitCode;
        $this->options['query']['CircuitCode'] = $circuitCode;

        return $this;
    }

    /**
     * @param string $vlanId
     *
     * @return $this
     */
    public function withVlanId($vlanId)
    {
        $this->data['VlanId'] = $vlanId;
        $this->options['query']['VlanId'] = $vlanId;

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
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

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
     * @param string $vbrId
     *
     * @return $this
     */
    public function withVbrId($vbrId)
    {
        $this->data['VbrId'] = $vbrId;
        $this->options['query']['VbrId'] = $vbrId;

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
     * @param string $peerGatewayIp
     *
     * @return $this
     */
    public function withPeerGatewayIp($peerGatewayIp)
    {
        $this->data['PeerGatewayIp'] = $peerGatewayIp;
        $this->options['query']['PeerGatewayIp'] = $peerGatewayIp;

        return $this;
    }

    /**
     * @param string $peeringSubnetMask
     *
     * @return $this
     */
    public function withPeeringSubnetMask($peeringSubnetMask)
    {
        $this->data['PeeringSubnetMask'] = $peeringSubnetMask;
        $this->options['query']['PeeringSubnetMask'] = $peeringSubnetMask;

        return $this;
    }

    /**
     * @param string $physicalConnectionId
     *
     * @return $this
     */
    public function withPhysicalConnectionId($physicalConnectionId)
    {
        $this->data['PhysicalConnectionId'] = $physicalConnectionId;
        $this->options['query']['PhysicalConnectionId'] = $physicalConnectionId;

        return $this;
    }

    /**
     * @param string $localGatewayIp
     *
     * @return $this
     */
    public function withLocalGatewayIp($localGatewayIp)
    {
        $this->data['LocalGatewayIp'] = $localGatewayIp;
        $this->options['query']['LocalGatewayIp'] = $localGatewayIp;

        return $this;
    }
}
