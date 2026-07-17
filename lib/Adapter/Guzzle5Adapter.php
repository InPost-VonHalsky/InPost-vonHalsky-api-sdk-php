<?php
/**
 * Guzzle5Adapter
 *
 * Compatibility adapter for Guzzle 5.x environments (e.g., PrestaShop 1.7.8).
 * Converts PSR-7 requests to Guzzle 5 format and wraps responses back to PSR-7.
 *
 * @package  InpostApi
 */

namespace InpostApi\Adapter;

use GuzzleHttp\Client;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Adapter for Guzzle 5.x compatibility.
 * Converts PSR-7 requests to Guzzle 5 format and wraps responses.
 */
class Guzzle5Adapter
{
    /**
     * @var Client
     */
    private $client;

    /**
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Send a PSR-7 request using Guzzle 5.x client
     *
     * @param RequestInterface $psr7Request PSR-7 request object
     * @param array $options Guzzle request options
     * @return ResponseInterface PSR-7 response (wrapped if Guzzle 5)
     */
    public function send(RequestInterface $psr7Request, array $options = [])
    {
        // Convert PSR-7 Request to Guzzle 5 request
        $guzzle5Options = array_merge($options, [
            'headers' => $psr7Request->getHeaders(),
        ]);

        // Handle body - only set if not empty
        $body = (string) $psr7Request->getBody();
        if ($body !== '') {
            $guzzle5Options['body'] = $body;
        }

        $guzzle5Request = $this->client->createRequest(
            $psr7Request->getMethod(),
            (string) $psr7Request->getUri(),
            $guzzle5Options
        );

        $guzzle5Response = $this->client->send($guzzle5Request);

        // Wrap Guzzle 5 response to PSR-7 ResponseInterface
        return new Guzzle5ResponseAdapter($guzzle5Response);
    }

    /**
     * Check if current Guzzle version is 5.x
     *
     * @return bool
     */
    public static function isGuzzle5()
    {
        // Guzzle 5 has VERSION constant on ClientInterface
        // Guzzle 7 removed it (uses Composer version instead)
        if (!defined('GuzzleHttp\\ClientInterface::VERSION')) {
            return false;
        }
        return version_compare(\GuzzleHttp\ClientInterface::VERSION, '6.0', '<');
    }
}
