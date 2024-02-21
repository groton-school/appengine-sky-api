<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Medical\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\StudentMedicationRead;

/**
 * @api
 */
class Medications extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/medical/users/{user_id}/medications";

    /**
     * Returns a list of medications for the specified ```user_id```.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Nurse
     *
     * ***This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.***
     *
     * @param int $user_id Format - int32. ID of the student
     *
     * @return \Blackbaud\SKY\School\Components\StudentMedicationRead[]
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function getByUser(int $user_id): array
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));

        return array_map(fn($a) => new StudentMedicationRead($a), $this->send("get", ["{user_id}" => $user_id], []));
    }
}