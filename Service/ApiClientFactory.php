<?php
namespace Rohea\OpenXIntegrationBundle\Service;

use \LogicException;
use \InvalidArgumentException;
use \RuntimeException;
use \BadMethodCallException;

use Symfony\Component\HttpFoundation\Response;

class ApiClientFactory {

    /**
     * $var array OpenX server configurations from config
     */
    private $servers;

    public function __construct($servers)
    {
        $this->servers = $servers;
    }

    /**
     * Get instance of OpenX XML-RPC Api client
     *
     * @param string $server key that matches configuration
     */
    public function getClient($server)
    {
        if (! isset($this->servers[$server])) {
            throw new \InvalidArgumentException("Server '$server' is not defined in configuration.");
        }

        $config = $this->servers[$server];

var_dump($config);
die();

    }

}
