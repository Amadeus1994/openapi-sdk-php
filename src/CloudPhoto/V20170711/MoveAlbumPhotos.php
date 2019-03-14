<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Rpc;

/**
 * Api MoveAlbumPhotos
 *
 * @method string getSourceAlbumId()
 * @method string getTargetAlbumId()
 * @method string getLibraryId()
 * @method array getPhotoId()
 * @method string getStoreName()
 */
class MoveAlbumPhotos extends Rpc
{
    public $product = 'CloudPhoto';

    public $version = '2017-07-11';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'cloudphoto';

    /**
     * @param string $sourceAlbumId
     *
     * @return $this
     */
    public function withSourceAlbumId($sourceAlbumId)
    {
        $this->data['SourceAlbumId'] = $sourceAlbumId;
        $this->options['query']['SourceAlbumId'] = $sourceAlbumId;

        return $this;
    }

    /**
     * @param string $targetAlbumId
     *
     * @return $this
     */
    public function withTargetAlbumId($targetAlbumId)
    {
        $this->data['TargetAlbumId'] = $targetAlbumId;
        $this->options['query']['TargetAlbumId'] = $targetAlbumId;

        return $this;
    }

    /**
     * @param string $libraryId
     *
     * @return $this
     */
    public function withLibraryId($libraryId)
    {
        $this->data['LibraryId'] = $libraryId;
        $this->options['query']['LibraryId'] = $libraryId;

        return $this;
    }

    /**
     * @param array $photoId
     *
     * @return $this
     */
    public function withPhotoId(array $photoId)
    {
        $this->data['PhotoId'] = $photoId;
        foreach ($photoId as $i => $iValue) {
            $this->options['query']['PhotoId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $storeName
     *
     * @return $this
     */
    public function withStoreName($storeName)
    {
        $this->data['StoreName'] = $storeName;
        $this->options['query']['StoreName'] = $storeName;

        return $this;
    }
}
