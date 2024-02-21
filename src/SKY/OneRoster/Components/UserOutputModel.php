<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property \Blackbaud\SKY\OneRoster\Components\ORUserModel $user
 * @property \Blackbaud\SKY\OneRoster\Components\StatusInfoModel[]
 *   $statusInfoSet
 *
 * @api
 */
class UserOutputModel extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "user",
        "statusInfoSet",
    ];
}