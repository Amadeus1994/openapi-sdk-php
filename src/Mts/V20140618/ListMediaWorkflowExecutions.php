<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Rpc;

/**
 * Api ListMediaWorkflowExecutions
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getInputFileURL()
 * @method string getNextPageToken()
 * @method string getOwnerAccount()
 * @method string getMaximumPageSize()
 * @method string getMediaWorkflowId()
 * @method string getOwnerId()
 * @method string getMediaWorkflowName()
 */
class ListMediaWorkflowExecutions extends Rpc
{
    public $product = 'Mts';

    public $version = '2014-06-18';

    public $method = 'POST';

    public $serviceCode = 'mts';

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $inputFileURL
     *
     * @return $this
     */
    public function withInputFileURL($inputFileURL)
    {
        $this->data['InputFileURL'] = $inputFileURL;
        $this->options['query']['InputFileURL'] = $inputFileURL;

        return $this;
    }

    /**
     * @param string $nextPageToken
     *
     * @return $this
     */
    public function withNextPageToken($nextPageToken)
    {
        $this->data['NextPageToken'] = $nextPageToken;
        $this->options['query']['NextPageToken'] = $nextPageToken;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $maximumPageSize
     *
     * @return $this
     */
    public function withMaximumPageSize($maximumPageSize)
    {
        $this->data['MaximumPageSize'] = $maximumPageSize;
        $this->options['query']['MaximumPageSize'] = $maximumPageSize;

        return $this;
    }

    /**
     * @param string $mediaWorkflowId
     *
     * @return $this
     */
    public function withMediaWorkflowId($mediaWorkflowId)
    {
        $this->data['MediaWorkflowId'] = $mediaWorkflowId;
        $this->options['query']['MediaWorkflowId'] = $mediaWorkflowId;

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

    /**
     * @param string $mediaWorkflowName
     *
     * @return $this
     */
    public function withMediaWorkflowName($mediaWorkflowName)
    {
        $this->data['MediaWorkflowName'] = $mediaWorkflowName;
        $this->options['query']['MediaWorkflowName'] = $mediaWorkflowName;

        return $this;
    }
}
