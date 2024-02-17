<?php

namespace Blackbaud\SKY\School\Endpoints\v1\medical;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\SecurityRoleCollection;

/**
 * @api
 */
class securityroles extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/medical/securityroles";

    /**
     * Returns the user roles available for additional access control when
     * posting medical data like student allergies or student medication.
     *
     * The ```role_access``` object in those post endpoints takes in the role
     * IDs returned here. ***This endpoint is in BETA. It may be removed or
     * replaced with a 90 day deprecation period.***
     *
     * @return \Blackbaud\SKY\School\Objects\SecurityRoleCollection
     *
     * @api
     */
    public function getAll()
    {
        return new SecurityRoleCollection($this->send("get", [], []));
    }
}
