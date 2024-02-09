<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Assignment Type Model
 *
 * @property int|null $id
 * @property string|null $name
 * @property string|null $percentage
 * @property float|null $weight
 * @api
 */
class AssignmentType extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name","percentage","weight"];
}
