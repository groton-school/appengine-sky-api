<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Department model
*
* @property int|null $id
* @property string|null $level_description
* @property string|null $name
* @property int|null $sort
@api
*/
class Department extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","level_description","name","sort"];
}
