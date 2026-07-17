<?php
/**
 * Guzzle5StreamAdapter
 *
 * PSR-7 StreamInterface adapter for Guzzle 5.x Stream objects.
 * Wraps Guzzle 5 Stream to make it compatible with PSR-7.
 *
 * @package  InpostApi
 */

namespace InpostApi\Adapter;

use GuzzleHttp\Stream\StreamInterface as Guzzle5StreamInterface;
use Psr\Http\Message\StreamInterface;

/**
 * Adapter that wraps Guzzle 5.x Stream to implement PSR-7 StreamInterface.
 */
class Guzzle5StreamAdapter implements StreamInterface
{
    /**
     * @var Guzzle5StreamInterface
     */
    private $guzzle5Stream;

    /**
     * @param Guzzle5StreamInterface $guzzle5Stream
     */
    public function __construct(Guzzle5StreamInterface $guzzle5Stream)
    {
        $this->guzzle5Stream = $guzzle5Stream;
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return (string) $this->guzzle5Stream;
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        $this->guzzle5Stream->close();
    }

    /**
     * {@inheritdoc}
     */
    public function detach()
    {
        return $this->guzzle5Stream->detach();
    }

    /**
     * {@inheritdoc}
     */
    public function getSize()
    {
        return $this->guzzle5Stream->getSize();
    }

    /**
     * {@inheritdoc}
     */
    public function tell()
    {
        return $this->guzzle5Stream->tell();
    }

    /**
     * {@inheritdoc}
     */
    public function eof()
    {
        return $this->guzzle5Stream->eof();
    }

    /**
     * {@inheritdoc}
     */
    public function isSeekable()
    {
        return $this->guzzle5Stream->isSeekable();
    }

    /**
     * {@inheritdoc}
     */
    public function seek($offset, $whence = SEEK_SET)
    {
        $this->guzzle5Stream->seek($offset, $whence);
    }

    /**
     * {@inheritdoc}
     */
    public function rewind()
    {
        $this->guzzle5Stream->seek(0);
    }

    /**
     * {@inheritdoc}
     */
    public function isWritable()
    {
        return $this->guzzle5Stream->isWritable();
    }

    /**
     * {@inheritdoc}
     */
    public function write($string)
    {
        return $this->guzzle5Stream->write($string);
    }

    /**
     * {@inheritdoc}
     */
    public function isReadable()
    {
        return $this->guzzle5Stream->isReadable();
    }

    /**
     * {@inheritdoc}
     */
    public function read($length)
    {
        return $this->guzzle5Stream->read($length);
    }

    /**
     * {@inheritdoc}
     */
    public function getContents()
    {
        return $this->guzzle5Stream->getContents();
    }

    /**
     * {@inheritdoc}
     */
    public function getMetadata($key = null)
    {
        return $this->guzzle5Stream->getMetadata($key);
    }
}
