<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Rpc;

/**
 * Api CreateDedicatedLineBackup
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getCcnId()
 * @method string getSmartAGId()
 * @method string getOwnerId()
 * @method string getVbrId()
 * @method string getVbrRegionId()
 */
class CreateDedicatedLineBackup extends Rpc
{
    public $product = 'Smartag';

    public $version = '2018-03-13';

    public $method = 'POST';

    public $serviceCode = 'smartag';

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
     * @param string $ccnId
     *
     * @return $this
     */
    public function withCcnId($ccnId)
    {
        $this->data['CcnId'] = $ccnId;
        $this->options['query']['CcnId'] = $ccnId;

        return $this;
    }

    /**
     * @param string $smartAGId
     *
     * @return $this
     */
    public function withSmartAGId($smartAGId)
    {
        $this->data['SmartAGId'] = $smartAGId;
        $this->options['query']['SmartAGId'] = $smartAGId;

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
     * @param string $vbrRegionId
     *
     * @return $this
     */
    public function withVbrRegionId($vbrRegionId)
    {
        $this->data['VbrRegionId'] = $vbrRegionId;
        $this->options['query']['VbrRegionId'] = $vbrRegionId;

        return $this;
    }
}
