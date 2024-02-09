<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Season Model
 *
 * @property int $id
 * @property string|null $name
 * @api
 */
class Season extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name"];
}
