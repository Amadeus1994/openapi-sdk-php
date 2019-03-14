<?php

namespace AlibabaCloud\Afs\V20180112;

use AlibabaCloud\Rpc;

/**
 * Api DescribeEarlyWarning
 *
 * @method string getSourceIp()
 */
class DescribeEarlyWarning extends Rpc
{
    public $product = 'afs';

    public $version = '2018-01-12';

    public $method = 'POST';

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
}
