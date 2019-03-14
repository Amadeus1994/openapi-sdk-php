<?php

namespace AlibabaCloud\Ots\V20160620;

use AlibabaCloud\Rpc;

/**
 * Api UpdateInstance
 *
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method string getInstanceName()
 * @method string getNetwork()
 */
class UpdateInstance extends Rpc
{
    public $product = 'Ots';

    public $version = '2016-06-20';

    public $method = 'POST';

    public $serviceCode = 'ots';

    /**
     * @param string $accessKeyId
     *
     * @return $this
     */
    public function withAccessKeyId($accessKeyId)
    {
        $this->data['AccessKeyId'] = $accessKeyId;
        $this->options['query']['access_key_id'] = $accessKeyId;

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
     * @param string $instanceName
     *
     * @return $this
     */
    public function withInstanceName($instanceName)
    {
        $this->data['InstanceName'] = $instanceName;
        $this->options['query']['InstanceName'] = $instanceName;

        return $this;
    }

    /**
     * @param string $network
     *
     * @return $this
     */
    public function withNetwork($network)
    {
        $this->data['Network'] = $network;
        $this->options['query']['Network'] = $network;

        return $this;
    }
}
