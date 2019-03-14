<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Rpc;

/**
 * Api SetApisAuthorities
 *
 * @method string getAuthVaildTime()
 * @method string getStageName()
 * @method string getSecurityToken()
 * @method string getGroupId()
 * @method string getAppId()
 * @method string getDescription()
 * @method string getAuthValidTime()
 * @method string getApiIds()
 */
class SetApisAuthorities extends Rpc
{
    public $product = 'CloudAPI';

    public $version = '2016-07-14';

    public $method = 'POST';

    public $serviceCode = 'apigateway';

    /**
     * @param string $authVaildTime
     *
     * @return $this
     */
    public function withAuthVaildTime($authVaildTime)
    {
        $this->data['AuthVaildTime'] = $authVaildTime;
        $this->options['query']['AuthVaildTime'] = $authVaildTime;

        return $this;
    }

    /**
     * @param string $stageName
     *
     * @return $this
     */
    public function withStageName($stageName)
    {
        $this->data['StageName'] = $stageName;
        $this->options['query']['StageName'] = $stageName;

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

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function withGroupId($groupId)
    {
        $this->data['GroupId'] = $groupId;
        $this->options['query']['GroupId'] = $groupId;

        return $this;
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function withAppId($appId)
    {
        $this->data['AppId'] = $appId;
        $this->options['query']['AppId'] = $appId;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

        return $this;
    }

    /**
     * @param string $authValidTime
     *
     * @return $this
     */
    public function withAuthValidTime($authValidTime)
    {
        $this->data['AuthValidTime'] = $authValidTime;
        $this->options['query']['AuthValidTime'] = $authValidTime;

        return $this;
    }

    /**
     * @param string $apiIds
     *
     * @return $this
     */
    public function withApiIds($apiIds)
    {
        $this->data['ApiIds'] = $apiIds;
        $this->options['query']['ApiIds'] = $apiIds;

        return $this;
    }
}
