<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * Api DescribeImageUploadInfo
 *
 * @method string getSourceIp()
 */
class DescribeImageUploadInfo extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

    public $serviceCode = 'green';

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
