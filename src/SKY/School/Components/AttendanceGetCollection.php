<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * A Collection
 *
 * @property int $count The number of items in the collection
 * @property string $next_link For paginated responses, the URI for the next
 *   page of results
 * @property \Blackbaud\SKY\School\Components\AttendanceGet[] $value The set
 *   of items included in the response. This may be a subset of the items in the
 *   collection
 *
 * @api
 */
class AttendanceGetCollection extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "count",
        "next_link",
        "value",
    ];
}