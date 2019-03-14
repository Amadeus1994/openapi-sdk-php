<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * Api CreatCustomOcrTemplate
 *
 * @method string getImgUrl()
 * @method string getSourceIp()
 * @method string getReferArea()
 * @method string getRecognizeArea()
 * @method string getName()
 */
class CreatCustomOcrTemplate extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

    public $serviceCode = 'green';

    /**
     * @param string $imgUrl
     *
     * @return $this
     */
    public function withImgUrl($imgUrl)
    {
        $this->data['ImgUrl'] = $imgUrl;
        $this->options['query']['ImgUrl'] = $imgUrl;

        return $this;
    }

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

    /**
     * @param string $referArea
     *
     * @return $this
     */
    public function withReferArea($referArea)
    {
        $this->data['ReferArea'] = $referArea;
        $this->options['query']['ReferArea'] = $referArea;

        return $this;
    }

    /**
     * @param string $recognizeArea
     *
     * @return $this
     */
    public function withRecognizeArea($recognizeArea)
    {
        $this->data['RecognizeArea'] = $recognizeArea;
        $this->options['query']['RecognizeArea'] = $recognizeArea;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }
}
