<?php
/**
 * Guzzle5ResponseAdapter
 *
 * PSR-7 ResponseInterface adapter for Guzzle 5.x Response objects.
 * Wraps Guzzle 5 Response to make it compatible with PSR-7.
 *
 * @package  InpostApi
 */

namespace InpostApi\Adapter;

use GuzzleHttp\Message\ResponseInterface as Guzzle5ResponseInterface;
use GuzzleHttp\Stream\StreamInterface as Guzzle5StreamInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

/**
 * Adapter that wraps Guzzle 5.x Response to implement PSR-7 ResponseInterface.
 */
class Guzzle5ResponseAdapter implements ResponseInterface
{
    /**
     * @var Guzzle5ResponseInterface
     */
    private $guzzle5Response;

    /**
     * @param Guzzle5ResponseInterface $guzzle5Response
     */
    public function __construct(Guzzle5ResponseInterface $guzzle5Response)
    {
        $this->guzzle5Response = $guzzle5Response;
    }

    /**
     * {@inheritdoc}
     */
    public function getStatusCode()
    {
        return $this->guzzle5Response->getStatusCode();
    }

    /**
     * {@inheritdoc}
     */
    public function withStatus($code, $reasonPhrase = '')
    {
        $new = clone $this;
        return $new;
    }

    /**
     * {@inheritdoc}
     */
    public function getReasonPhrase()
    {
        return $this->guzzle5Response->getReasonPhrase();
    }

    /**
     * {@inheritdoc}
     */
    public function getProtocolVersion()
    {
        return $this->guzzle5Response->getProtocolVersion();
    }

    /**
     * {@inheritdoc}
     */
    public function withProtocolVersion($version)
    {
        $new = clone $this;
        return $new;
    }

    /**
     * {@inheritdoc}
     */
    public function getHeaders()
    {
        return $this->guzzle5Response->getHeaders();
    }

    /**
     * {@inheritdoc}
     */
    public function hasHeader($name)
    {
        return $this->guzzle5Response->hasHeader($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getHeader($name)
    {
        return $this->guzzle5Response->getHeader($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getHeaderLine($name)
    {
        return $this->guzzle5Response->getHeaderLine($name);
    }

    /**
     * {@inheritdoc}
     */
    public function withHeader($name, $value)
    {
        $new = clone $this;
        return $new;
    }

    /**
     * {@inheritdoc}
     */
    public function withAddedHeader($name, $value)
    {
        $new = clone $this;
        return $new;
    }

    /**
     * {@inheritdoc}
     */
    public function withoutHeader($name)
    {
        $new = clone $this;
        return $new;
    }

    /**
     * {@inheritdoc}
     */
    public function getBody()
    {
        $guzzle5Body = $this->guzzle5Response->getBody();
        return new Guzzle5StreamAdapter($guzzle5Body);
    }

    /**
     * {@inheritdoc}
     */
    public function withBody(StreamInterface $body)
    {
        $new = clone $this;
        return $new;
    }

    /**
     * Allow deep cloning
     */
    public function __clone()
    {
        $this->guzzle5Response = clone $this->guzzle5Response;
    }
}
