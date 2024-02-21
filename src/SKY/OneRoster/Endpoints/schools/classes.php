<?php

namespace Blackbaud\SKY\OneRoster\Endpoints\Schools;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\ClassOutputModel;
use Blackbaud\SKY\OneRoster\Endpoints\Schools\Classes\Enrollments;

/**
 * @api
 */
class Classes extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/schools/{school_id}/classes";

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Schools\Classes\Enrollments
     *   $_enrollments
     */
    public Enrollments $_enrollments;

    /**
     * Returns a collection of classes for the specified `school_id`.
     *
     * @param string $school_id sourcedId for the school
     *
     * @return \Blackbaud\SKY\OneRoster\Components\ClassOutputModel OK - It
     *   was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function getBySchool(string $school_id): ClassOutputModel
    {
        assert($school_id !== null, new ArgumentException("Parameter `school_id` is required"));

        return new ClassOutputModel($this->send("get", ["{school_id}" => $school_id], []));
    }

    /**
     * @return \Blackbaud\SKY\OneRoster\Endpoints\Schools\Classes\Enrollments
     *
     * @api
     */
    public function enrollments(): Enrollments
    {
        if ($this->_enrollments === null) {
            $this->_enrollments = new Enrollments($this->api);
        }
        return $this->_enrollments;
    }
}