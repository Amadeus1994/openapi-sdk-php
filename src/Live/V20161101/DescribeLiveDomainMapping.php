<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * Api DescribeLiveDomainMapping
 *
 * @method string getDomainName()
 * @method string getOwnerId()
 */
class DescribeLiveDomainMapping extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $serviceCode = 'live';

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function withDomainName($domainName)
    {
        $this->data['DomainName'] = $domainName;
        $this->options['query']['DomainName'] = $domainName;

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
