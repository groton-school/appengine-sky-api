<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ConstituentAddressMatchingHouseholdMembers
 *
 * @property string $constituent_id constituent id
 * @property string $name household member
 * @property string $relationship_to_primary relationship to primary
 *
 * @api
 */
class ConstituentAddressMatchingHouseholdMembers extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "constituent_id" => "string",
        "name" => "string",
        "relationship_to_primary" => "string",
    ];
}
