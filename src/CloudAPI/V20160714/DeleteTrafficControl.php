<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Rpc;

/**
 * Api DeleteTrafficControl
 *
 * @method string getTrafficControlId()
 * @method string getSecurityToken()
 */
class DeleteTrafficControl extends Rpc
{
    public $product = 'CloudAPI';

    public $version = '2016-07-14';

    public $method = 'POST';

    public $serviceCode = 'apigateway';

    /**
     * @param string $trafficControlId
     *
     * @return $this
     */
    public function withTrafficControlId($trafficControlId)
    {
        $this->data['TrafficControlId'] = $trafficControlId;
        $this->options['query']['TrafficControlId'] = $trafficControlId;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

        return $this;
    }
}
