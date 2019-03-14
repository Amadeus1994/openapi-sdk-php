<?php

namespace AlibabaCloud\LinkFace\V20180720;

use AlibabaCloud\Rpc;

/**
 * Api QueryFace
 *
 * @method string getUserId()
 */
class QueryFace extends Rpc
{
    public $product = 'LinkFace';

    public $version = '2018-07-20';

    public $scheme = 'https';

    public $method = 'POST';

    /**
     * @param string $userId
     *
     * @return $this
     */
    public function withUserId($userId)
    {
        $this->data['UserId'] = $userId;
        $this->options['query']['UserId'] = $userId;

        return $this;
    }
}
