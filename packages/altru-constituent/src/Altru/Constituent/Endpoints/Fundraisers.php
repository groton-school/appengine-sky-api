<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentFundraiser;
use Blackbaud\SKY\Altru\Constituent\Components\NewConstituentFundraiser;
use Blackbaud\SKY\Altru\Constituent\Components\PostResponse;
use Blackbaud\SKY\Altru\Constituent\Components\UpdateConstituentFundraiser;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Fundraisers\List_;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Fundraisers\Prospectplanlist;

/**
 * Routing class for the subnamespace `Fundraisers`
 *
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Fundraisers\List_
 *   $list_
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Fundraisers\Prospectplanlist
 *   $prospectplanlist
 *
 * @api
 */
class Fundraisers extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/fundraisers/{fundraiser_date_range_id}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "list_" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Fundraisers\List_",
        "prospectplanlist" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Fundraisers\Prospectplanlist",
    ];

    /**
     * @var \Blackbaud\SKY\Altru\Constituent\Endpoints\Fundraisers\List_
     *   $_list_
     */
    protected List_ $_list_ = null;

    /**
     * @var \Blackbaud\SKY\Altru\Constituent\Endpoints\Fundraisers\Prospectplanlist
     *   $_prospectplanlist
     */
    protected Prospectplanlist $_prospectplanlist = null;

    /**
     * This dataform template is used to add a fundraiser constituency to a
     * constituent.
     *
     * @param \Blackbaud\SKY\Altru\Constituent\Components\NewConstituentFundraiser
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\PostResponse
     *   Returned when the operation successfully creates the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function postBy(NewConstituentFundraiser $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }

    /**
     * This dataform template is used to edit a fundraiser constituency of a
     * constituent.
     *
     * @param array{fundraiser_date_range_id: string} $params An associative
     *   array
     *     - fundraiser_date_range_id: The fundraiser date range id.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentFundraiser
     *   Returned when the operation succeeds. The response body contains the
     *   specified resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByFundraiserDateRangeId(array $params): ConstituentFundraiser
    {
        assert(isset($params['fundraiser_date_range_id']), new ArgumentException("Parameter `fundraiser_date_range_id` is required"));

        return new ConstituentFundraiser($this->send("get", ["{fundraiser_date_range_id}" => $params['fundraiser_date_range_id']], []));
    }

    /**
     * This record operation is used to handle the rules of deleting a
     * fundraiser constituency.
     *
     * @param array{fundraiser_date_range_id: string} $params An associative
     *   array
     *     - fundraiser_date_range_id: The fundraiser date range id
     *
     * @return void Returned when the operation successfully deletes the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByFundraiserDateRangeId(array $params): void
    {
        assert(isset($params['fundraiser_date_range_id']), new ArgumentException("Parameter `fundraiser_date_range_id` is required"));

        return $this->send("delete", ["{fundraiser_date_range_id}" => $params['fundraiser_date_range_id']], []);
    }

    /**
     * This dataform template is used to edit a fundraiser constituency of a
     * constituent.
     *
     * @param array{fundraiser_date_range_id: string} $params An associative
     *   array
     *     - fundraiser_date_range_id: The fundraiser date range id.
     * @param \Blackbaud\SKY\Altru\Constituent\Components\UpdateConstituentFundraiser
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return void Returned when the operation successfully edits the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchByFundraiserDateRangeId(array $params, UpdateConstituentFundraiser $requestBody): void
    {
        assert(isset($params['fundraiser_date_range_id']), new ArgumentException("Parameter `fundraiser_date_range_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{fundraiser_date_range_id}" => $params['fundraiser_date_range_id']], [], $requestBody);
    }
}