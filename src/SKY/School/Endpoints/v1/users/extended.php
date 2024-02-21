<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\UserExtended;
use Blackbaud\SKY\School\Components\UserExtendedCollection;

/**
 * @api
 */
class Extended extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/extended/{user_id}";

    /**
     * Returns a paginated collection of extended user details, limited to
     * 1000 users per page.
     *
     * Use the last user's ID as the ```marker``` value to return the next set
     * of results.
     *
     * Requires the following role in the Education Management system:
     *
     * - SKY API Data Sync
     *
     * @param string $base_role_ids Comma delimited list of base role IDs to
     *   get users for.
     * @param ?int $marker (Optional) Format - int32. The user's ID to start
     *   at to return the next batch of data. Results will start with the next
     *   user in the result set.
     *
     * @return \Blackbaud\SKY\School\Components\UserExtendedCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function filterBy(string $base_role_ids, ?int $marker = null): UserExtendedCollection
    {
        assert($base_role_ids !== null, new ArgumentException("Parameter `base_role_ids` is required"));

        return new UserExtendedCollection($this->send("get", [], ["base_role_ids" => $base_role_ids,
        "marker" => $marker]));
    }

    /**
     * Returns extended user details for the specified ```user_id```.
     *
     * Requires the following role in the Education Management system:
     *
     * - SKY API Data Sync
     *
     * @param int $user_id Format - int32. The ID of the user.
     *
     * @return \Blackbaud\SKY\School\Components\UserExtended Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function get(int $user_id): UserExtended
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));

        return new UserExtended($this->send("get", ["{user_id}" => $user_id], []));
    }
}