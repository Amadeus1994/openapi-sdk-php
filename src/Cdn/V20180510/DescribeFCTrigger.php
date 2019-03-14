<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Rpc;

/**
 * Api DescribeFCTrigger
 *
 * @method string getTriggerARN()
 * @method string getOwnerId()
 */
class DescribeFCTrigger extends Rpc
{
    public $product = 'Cdn';

    public $version = '2018-05-10';

    /**
     * @param string $triggerARN
     *
     * @return $this
     */
    public function withTriggerARN($triggerARN)
    {
        $this->data['TriggerARN'] = $triggerARN;
        $this->options['query']['TriggerARN'] = $triggerARN;

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
