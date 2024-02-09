<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property int|null $WeekInCycle
* @property int|null $DayInCycle
* @property int|null $DailyOrdinal
* @property int|null $BlockId
* @property string|null $BlockName
@api
*/
class ScheduleSetRotationDayMeeting extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["WeekInCycle","DayInCycle","DailyOrdinal","BlockId","BlockName"];
}
