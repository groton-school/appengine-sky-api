<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Result Create Model
*
* @property int $schedule_id
* @property int $schedule_type
* @property bool $send_notification
* @property ResultCreateOpponent[]|null $opponents
@api
*/
class ResultCreate extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["schedule_id","schedule_type","send_notification","opponents"];
}
