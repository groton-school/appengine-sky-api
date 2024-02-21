<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string $grad_year
 *
 * @api
 */
class DormStudentInfo extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "grad_year",
    ];
}