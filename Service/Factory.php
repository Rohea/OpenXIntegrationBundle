<?php
namespace Rohea\OpenXIntegrationBundle\Service;

use \InvalidArgumentException;
use fXmlRpc\Client as FXmlRpcClient;
use OpenXApiClient\OpenXApiClient;

class Factory {

    /**
     * $var array OpenX server configurations from config
     */
    private $servers;

    /**
     * Constructor
     *
     * @param array $servers config
     */
    public function __construct($servers)
    {
        $this->servers = $servers;
    }

    /**
     * Get instance of OpenX XML-RPC Api client for given server
     *
     * @param string $server key that matches configuration
     * @param fXmlRpc\Client $client instance of fXmlRcp client or null. If null, default client will be created.
     */
    public function getOpenXApiClient($server, FXmlRpcClient $client = null)
    {
        if (! isset($this->servers[$server])) {
            throw new InvalidArgumentException("Server '$server' is not defined in configuration.");
        }

        $config = $this->servers[$server];

        if (! isset($client)) {
            $client = new FXmlRpcClient("http://".$config['host'].$config['path']);
        }
        $openx = new OpenXApiClient($client, $config['username'], $config['password']);

        return $openx;
    }

}
