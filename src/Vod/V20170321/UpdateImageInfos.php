<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * Api UpdateImageInfos
 *
 * @method string getResourceOwnerId()
 * @method string getUpdateContent()
 * @method string getResourceOwnerAccount()
 * @method string getResourceRealOwnerId()
 * @method string getOwnerId()
 */
class UpdateImageInfos extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';

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
     * @param string $updateContent
     *
     * @return $this
     */
    public function withUpdateContent($updateContent)
    {
        $this->data['UpdateContent'] = $updateContent;
        $this->options['query']['UpdateContent'] = $updateContent;

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
     * @param string $resourceRealOwnerId
     *
     * @return $this
     */
    public function withResourceRealOwnerId($resourceRealOwnerId)
    {
        $this->data['ResourceRealOwnerId'] = $resourceRealOwnerId;
        $this->options['query']['ResourceRealOwnerId'] = $resourceRealOwnerId;

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
