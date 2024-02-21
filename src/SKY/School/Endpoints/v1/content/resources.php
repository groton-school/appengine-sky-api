<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Content;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\ResourceCollection;

/**
 * @api
 */
class Resources extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/content/resources";

    /**
     * Returns a collection of Resources Requires at least one of the
     * following roles in the Education Management System:
     *
     * - Parent
     *
     * - Faculty
     *
     * - Student
     *
     * ***This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.***
     *
     * @return \Blackbaud\SKY\School\Components\ResourceCollection Success
     *
     * @api
     */
    public function getAll(): ResourceCollection
    {
        return new ResourceCollection($this->send("get", [], []));
    }
}