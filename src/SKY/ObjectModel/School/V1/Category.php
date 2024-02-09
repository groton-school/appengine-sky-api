<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* News Category Model
*
* @property int|null $id
* @property string|null $name
* @property string|null $content_type
* @property bool|null $primary
@api
*/
class Category extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name","content_type","primary"];
}
