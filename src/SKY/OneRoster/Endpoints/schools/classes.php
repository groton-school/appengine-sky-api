<?php

namespace Blackbaud\SKY\OneRoster\Endpoints\schools;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\OneRoster\Objects\ClassOutputModel;

/**
 * @api
 */
class classes extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/schools/{school_id}/classes";

    /**
     * Returns a collection of classes for the specified `school_id`.
     *
     * @param array{school_id: string} $params An associative array
     *     - school_id: sourcedId for the school
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\ClassOutputModel
     *
     * @api
     */
    public function getBySchool(array $params)
    {
        return new ClassOutputModel($this->send("get", ["{school_id}" => $params["school_id"]], []));
    }
}
