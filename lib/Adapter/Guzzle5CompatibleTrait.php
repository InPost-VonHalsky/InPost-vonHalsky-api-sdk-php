<?php
/**
 * Guzzle5CompatibleTrait
 *
 * Trait providing Guzzle 5.x compatibility for API classes.
 *
 * @package  InpostApi
 */

namespace InpostApi\Adapter;

use Psr\Http\Message\RequestInterface;

/**
 * Trait for Guzzle 5.x compatibility in API classes.
 * Use sendCompatibleRequest() instead of $this->client->send().
 */
trait Guzzle5CompatibleTrait
{
    /**
     * @var Guzzle5Adapter|null
     */
    private $guzzle5Adapter;

    /**
     * Send request with Guzzle 5.x or 7.x compatibility
     *
     * @param RequestInterface $request PSR-7 request
     * @param array $options Guzzle options
     * @return \Psr\Http\Message\ResponseInterface|\GuzzleHttp\Message\ResponseInterface
     */
    protected function sendCompatibleRequest(RequestInterface $request, array $options)
    {
        if (Guzzle5Adapter::isGuzzle5()) {
            if ($this->guzzle5Adapter === null) {
                $this->guzzle5Adapter = new Guzzle5Adapter($this->client);
            }
            return $this->guzzle5Adapter->send($request, $options);
        }

        return $this->client->send($request, $options);
    }
}
