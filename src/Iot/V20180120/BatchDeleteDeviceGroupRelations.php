<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * Api BatchDeleteDeviceGroupRelations
 *
 * @method string getIotInstanceId()
 * @method string getGroupId()
 * @method array getDevice()
 */
class BatchDeleteDeviceGroupRelations extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

    public $method = 'POST';

    /**
     * @param string $iotInstanceId
     *
     * @return $this
     */
    public function withIotInstanceId($iotInstanceId)
    {
        $this->data['IotInstanceId'] = $iotInstanceId;
        $this->options['query']['IotInstanceId'] = $iotInstanceId;

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function withGroupId($groupId)
    {
        $this->data['GroupId'] = $groupId;
        $this->options['query']['GroupId'] = $groupId;

        return $this;
    }

    /**
     * @param array $device
     *
     * @return $this
     */
    public function withDevice(array $device)
    {
        $this->data['Device'] = $device;
        foreach ($device as $i => $iValue) {
            $this->options['query']['Device.' . ($i + 1) . '.DeviceName'] = $device[$i]['DeviceName'];
            $this->options['query']['Device.' . ($i + 1) . '.ProductKey'] = $device[$i]['ProductKey'];
        }

        return $this;
    }
}
