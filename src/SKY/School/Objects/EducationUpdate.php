<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * EducationUpdate Model
 *
 * @property string $school The name of the school.
 * @property string $degree The degree or diploma earned.
 * @property string $major The major declared for the degree.
 * @property string $field The field of study at the school.
 * @property string $grad_year The graduation year.
 * @property string $sort_order The order to list the school.
 *
 * @api
 */
class EducationUpdate extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "school",
        "degree",
        "major",
        "field",
        "grad_year",
        "sort_order",
    ];
}
