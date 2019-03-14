<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Rpc;

/**
 * Api QueryTransferInList
 *
 * @method string getSubmissionStartDate()
 * @method string getUserClientIp()
 * @method string getSubmissionEndDate()
 * @method string getDomainName()
 * @method string getSimpleTransferInStatus()
 * @method string getPageSize()
 * @method string getLang()
 * @method string getPageNum()
 */
class QueryTransferInList extends Rpc
{
    public $product = 'Domain-intl';

    public $version = '2017-12-18';

    public $method = 'POST';

    public $serviceCode = 'domain';

    /**
     * @param string $submissionStartDate
     *
     * @return $this
     */
    public function withSubmissionStartDate($submissionStartDate)
    {
        $this->data['SubmissionStartDate'] = $submissionStartDate;
        $this->options['query']['SubmissionStartDate'] = $submissionStartDate;

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
     * @param string $submissionEndDate
     *
     * @return $this
     */
    public function withSubmissionEndDate($submissionEndDate)
    {
        $this->data['SubmissionEndDate'] = $submissionEndDate;
        $this->options['query']['SubmissionEndDate'] = $submissionEndDate;

        return $this;
    }

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
     * @param string $simpleTransferInStatus
     *
     * @return $this
     */
    public function withSimpleTransferInStatus($simpleTransferInStatus)
    {
        $this->data['SimpleTransferInStatus'] = $simpleTransferInStatus;
        $this->options['query']['SimpleTransferInStatus'] = $simpleTransferInStatus;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

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
     * @param string $pageNum
     *
     * @return $this
     */
    public function withPageNum($pageNum)
    {
        $this->data['PageNum'] = $pageNum;
        $this->options['query']['PageNum'] = $pageNum;

        return $this;
    }
}
