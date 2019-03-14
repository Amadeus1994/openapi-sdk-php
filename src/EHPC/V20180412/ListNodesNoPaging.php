<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * Api ListNodesNoPaging
 *
 * @method string getHostName()
 * @method string getRole()
 * @method string getClusterId()
 * @method string getOnlyDetached()
 */
class ListNodesNoPaging extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';

    /**
     * @param string $hostName
     *
     * @return $this
     */
    public function withHostName($hostName)
    {
        $this->data['HostName'] = $hostName;
        $this->options['query']['HostName'] = $hostName;

        return $this;
    }

    /**
     * @param string $role
     *
     * @return $this
     */
    public function withRole($role)
    {
        $this->data['Role'] = $role;
        $this->options['query']['Role'] = $role;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function withClusterId($clusterId)
    {
        $this->data['ClusterId'] = $clusterId;
        $this->options['query']['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $onlyDetached
     *
     * @return $this
     */
    public function withOnlyDetached($onlyDetached)
    {
        $this->data['OnlyDetached'] = $onlyDetached;
        $this->options['query']['OnlyDetached'] = $onlyDetached;

        return $this;
    }
}
