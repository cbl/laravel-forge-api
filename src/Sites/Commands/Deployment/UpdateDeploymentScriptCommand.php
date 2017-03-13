<?php

namespace Laravel\Forge\Sites\Commands\Deployment;

use Laravel\Forge\Server;
use Psr\Http\Message\ResponseInterface;
use Laravel\Forge\Sites\Commands\SiteResourceCommand;

class UpdateDeploymentScriptCommand extends SiteResourceCommand
{
    /**
     * Site resource path.
     *
     * @return string
     */
    public function siteResourcePath()
    {
        return 'deployment/script';
    }

    /**
     * HTTP request method.
     *
     * @return string
     */
    public function requestMethod()
    {
        return 'PUT';
    }

    /**
     * Handle command response.
     *
     * @param \Psr\Http\Message\ResponseInterface $response
     * @param \Laravel\Forge\Server               $server
     *
     * @return string
     */
    public function handleResponse(ResponseInterface $response, Server $server)
    {
        return (string) $response->getBody();
    }
}