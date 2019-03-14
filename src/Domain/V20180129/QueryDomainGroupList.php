<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * Api QueryDomainGroupList
 *
 * @method string getUserClientIp()
 * @method string getDomainGroupName()
 * @method string getLang()
 * @method string getShowDeletingGroup()
 */
class QueryDomainGroupList extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-01-29';

    public $method = 'POST';

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
     * @param string $domainGroupName
     *
     * @return $this
     */
    public function withDomainGroupName($domainGroupName)
    {
        $this->data['DomainGroupName'] = $domainGroupName;
        $this->options['query']['DomainGroupName'] = $domainGroupName;

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
     * @param string $showDeletingGroup
     *
     * @return $this
     */
    public function withShowDeletingGroup($showDeletingGroup)
    {
        $this->data['ShowDeletingGroup'] = $showDeletingGroup;
        $this->options['query']['ShowDeletingGroup'] = $showDeletingGroup;

        return $this;
    }
}
