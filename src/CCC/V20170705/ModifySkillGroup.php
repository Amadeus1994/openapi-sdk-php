<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api ModifySkillGroup
 *
 * @method array getSkillLevel()
 * @method string getInstanceId()
 * @method string getAllowPrivateOutboundNumber()
 * @method array getOutboundPhoneNumberId()
 * @method string getSkillGroupId()
 * @method string getName()
 * @method string getDescription()
 * @method array getUserId()
 */
class ModifySkillGroup extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';

    /**
     * @param array $skillLevel
     *
     * @return $this
     */
    public function withSkillLevel(array $skillLevel)
    {
        $this->data['SkillLevel'] = $skillLevel;
        foreach ($skillLevel as $i => $iValue) {
            $this->options['query']['SkillLevel.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $allowPrivateOutboundNumber
     *
     * @return $this
     */
    public function withAllowPrivateOutboundNumber($allowPrivateOutboundNumber)
    {
        $this->data['AllowPrivateOutboundNumber'] = $allowPrivateOutboundNumber;
        $this->options['query']['AllowPrivateOutboundNumber'] = $allowPrivateOutboundNumber;

        return $this;
    }

    /**
     * @param array $outboundPhoneNumberId
     *
     * @return $this
     */
    public function withOutboundPhoneNumberId(array $outboundPhoneNumberId)
    {
        $this->data['OutboundPhoneNumberId'] = $outboundPhoneNumberId;
        foreach ($outboundPhoneNumberId as $i => $iValue) {
            $this->options['query']['OutboundPhoneNumberId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $skillGroupId
     *
     * @return $this
     */
    public function withSkillGroupId($skillGroupId)
    {
        $this->data['SkillGroupId'] = $skillGroupId;
        $this->options['query']['SkillGroupId'] = $skillGroupId;

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
     * @param array $userId
     *
     * @return $this
     */
    public function withUserId(array $userId)
    {
        $this->data['UserId'] = $userId;
        foreach ($userId as $i => $iValue) {
            $this->options['query']['UserId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
