<?php

namespace AlibabaCloud\Scdn\V20171115;

use AlibabaCloud\Rpc;

/**
 * Api SetDomainServerCertificate
 *
 * @method string getSecurityToken()
 * @method string getSSLPub()
 * @method string getCertName()
 * @method string getSSLProtocol()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getRegion()
 * @method string getSSLPri()
 */
class SetDomainServerCertificate extends Rpc
{
    public $product = 'scdn';

    public $version = '2017-11-15';

    public $method = 'POST';

    public $serviceCode = 'scdn';

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $sSLPub
     *
     * @return $this
     */
    public function withSSLPub($sSLPub)
    {
        $this->data['SSLPub'] = $sSLPub;
        $this->options['query']['SSLPub'] = $sSLPub;

        return $this;
    }

    /**
     * @param string $certName
     *
     * @return $this
     */
    public function withCertName($certName)
    {
        $this->data['CertName'] = $certName;
        $this->options['query']['CertName'] = $certName;

        return $this;
    }

    /**
     * @param string $sSLProtocol
     *
     * @return $this
     */
    public function withSSLProtocol($sSLProtocol)
    {
        $this->data['SSLProtocol'] = $sSLProtocol;
        $this->options['query']['SSLProtocol'] = $sSLProtocol;

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
     * @param string $region
     *
     * @return $this
     */
    public function withRegion($region)
    {
        $this->data['Region'] = $region;
        $this->options['query']['Region'] = $region;

        return $this;
    }

    /**
     * @param string $sSLPri
     *
     * @return $this
     */
    public function withSSLPri($sSLPri)
    {
        $this->data['SSLPri'] = $sSLPri;
        $this->options['query']['SSLPri'] = $sSLPri;

        return $this;
    }
}
