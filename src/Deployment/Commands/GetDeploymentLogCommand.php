<?php

namespace Laravel\Forge\Deployment\Commands;

use Laravel\Forge\Commands\ResourceCommand;
use Laravel\Forge\Commands\RawBodyResponseTrait;
use Laravel\Forge\Commands\NotSupportingResourceClassTrait;

class GetDeploymentLogCommand extends ResourceCommand
{
    use NotSupportingResourceClassTrait, RawBodyResponseTrait;

    /**
     * Site resource path.
     *
     * @return string
     */
    public function resourcePath()
    {
        return 'deployment/log';
    }

    /**
     * HTTP request method.
     *
     * @return string
     */
    public function requestMethod()
    {
        return 'GET';
    }
}
