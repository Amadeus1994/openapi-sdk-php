<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api CreateCondition
 *
 * @method string getSourceIp()
 * @method string getName()
 * @method string getFilterConditions()
 */
class CreateCondition extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

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
     * @param string $filterConditions
     *
     * @return $this
     */
    public function withFilterConditions($filterConditions)
    {
        $this->data['FilterConditions'] = $filterConditions;
        $this->options['query']['FilterConditions'] = $filterConditions;

        return $this;
    }
}
