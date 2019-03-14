<?php

namespace AlibabaCloud\Airec\V20181012;

use AlibabaCloud\Roa;

/**
 * Api DescribeDataSetReport
 *
 * @method string getVersionId()
 * @method string getInstanceId()
 */
class DescribeDataSetReport extends Roa
{
    public $product = 'Airec';

    public $version = '2018-10-12';

    public $pathPattern = '/openapi/instances/[InstanceId]/dataSets/[VersionId]/report';

    public $serviceCode = 'airec';

    /**
     * @param string $versionId
     *
     * @return $this
     */
    public function withVersionId($versionId)
    {
        $this->data['VersionId'] = $versionId;
        $this->pathParameters['VersionId'] = $versionId;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->pathParameters['InstanceId'] = $instanceId;

        return $this;
    }
}
