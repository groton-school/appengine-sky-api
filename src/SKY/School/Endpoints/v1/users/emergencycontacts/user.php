<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\EmergencyContactUserCreate;

/**
 * @api
 */
class User extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/emergencycontacts/user";

    /**
     * Activates an existing inactive or suggested emergency contact for a
     * user. To add a new user emergency contact, add the correct relationship
     * between users first.
     *
     *  To add a non-user emergency contact please see the Emergency Contact
     * Non-User Create route.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * @param int $user_id Format - int32. The ID of the user.
     * @param \Blackbaud\SKY\School\Components\EmergencyContactUserCreate
     *   $requestBody
     *
     * @return void Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function postByUser(int $user_id, EmergencyContactUserCreate $requestBody): void
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", ["{user_id}" => $user_id], [], $requestBody);
    }
}
