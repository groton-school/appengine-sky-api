<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics\Teachers;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\AcademicsSectionCollection;

/**
 * @api
 */
class Sections extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/academics/teachers/{teacher_id}/sections";

    /**
     * Returns a collection of sections for the specified ```teacher\_id```.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic Group Manager
     *
     * - Teacher
     *
     * @param int $teacher_id Format - int32. The ID of the teacher to get
     *   sections for.
     * @param ?string $school_year The school year. Corresponds to
     *   ```school\_year\_label``` in the [Year
     *   list](https://developer.sky.blackbaud.com/docs/services/school/operations/v1yearsget).
     *
     * @return \Blackbaud\SKY\School\Components\AcademicsSectionCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByTeacher(int $teacher_id, ?string $school_year): AcademicsSectionCollection
    {
        assert($teacher_id !== null, new ArgumentException("Parameter `teacher_id` is required"));
        assert($school_year !== null, new ArgumentException("Parameter `school_year` is required"));

        return new AcademicsSectionCollection($this->send("get", ["{teacher_id}" => $teacher_id], ["school_year" => $school_year]));
    }
}
