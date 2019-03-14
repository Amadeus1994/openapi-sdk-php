<?php

namespace AlibabaCloud\Pvtz\V20180101;

use AlibabaCloud\Rpc;

/**
 * Api UpdateZoneRecord
 *
 * @method string getRr()
 * @method string getRecordId()
 * @method string getUserClientIp()
 * @method string getLang()
 * @method string getType()
 * @method string getPriority()
 * @method string getTtl()
 * @method string getValue()
 */
class UpdateZoneRecord extends Rpc
{
    public $product = 'pvtz';

    public $version = '2018-01-01';

    public $method = 'POST';

    public $serviceCode = 'pvtz';

    /**
     * @param string $rr
     *
     * @return $this
     */
    public function withRr($rr)
    {
        $this->data['Rr'] = $rr;
        $this->options['query']['Rr'] = $rr;

        return $this;
    }

    /**
     * @param string $recordId
     *
     * @return $this
     */
    public function withRecordId($recordId)
    {
        $this->data['RecordId'] = $recordId;
        $this->options['query']['RecordId'] = $recordId;

        return $this;
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function withUserClientIp($userClientIp)
    {
        $this->data['UserClientIp'] = $userClientIp;
        $this->options['query']['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function withLang($lang)
    {
        $this->data['Lang'] = $lang;
        $this->options['query']['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

        return $this;
    }

    /**
     * @param string $priority
     *
     * @return $this
     */
    public function withPriority($priority)
    {
        $this->data['Priority'] = $priority;
        $this->options['query']['Priority'] = $priority;

        return $this;
    }

    /**
     * @param string $ttl
     *
     * @return $this
     */
    public function withTtl($ttl)
    {
        $this->data['Ttl'] = $ttl;
        $this->options['query']['Ttl'] = $ttl;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withValue($value)
    {
        $this->data['Value'] = $value;
        $this->options['query']['Value'] = $value;

        return $this;
    }
}
