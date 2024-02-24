<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Advisories;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\AdvisoriesSectionCollection;

/**
 * @api
 */
class Sections extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/advisories/sections";

    /**
     * Returns a collection of advisory sections for the specified school
     * level
     *
     *  Requires the following role in the Education Management system:
     *
     * - Sky API Advisory Group Manager
     *
     * @param int $level_num Format - int32. Level number
     * @param ?string $school_year The school year to get advisory sections
     *   for.
     * Defaults to the current school year.
     *
     * @return \Blackbaud\SKY\School\Components\AdvisoriesSectionCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function filterBy(int $level_num, ?string $school_year): AdvisoriesSectionCollection
    {
        assert($level_num !== null, new ArgumentException("Parameter `level_num` is required"));
        assert($school_year !== null, new ArgumentException("Parameter `school_year` is required"));

        return new AdvisoriesSectionCollection($this->send("get", [], ["level_num" => $level_num,
        "school_year" => $school_year]));
    }
}
