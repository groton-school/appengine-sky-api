<?php

namespace Blackbaud\SKY\OneRoster\Endpoints\Classes\LineItems;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\ResultsOutputModelSvc;

/**
 * @api
 */
class Results extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/classes/{class_id}/lineItems/{li_id}/results";

    /**
     * Returns a collection of results for the specified `class_id` and
     * `li_id`.
     *
     * @param string $class_id sourcedId for the class
     * @param string $li_id sourcedId for the lineItem
     *
     * @return \Blackbaud\SKY\OneRoster\Components\ResultsOutputModelSvc OK -
     *   It was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function getByClassAndLi(string $class_id, string $li_id): ResultsOutputModelSvc
    {
        assert($class_id !== null, new ArgumentException("Parameter `class_id` is required"));
        assert($li_id !== null, new ArgumentException("Parameter `li_id` is required"));

        return new ResultsOutputModelSvc($this->send("get", ["{class_id}" => $class_id,
        "{li_id}" => $li_id], []));
    }
}