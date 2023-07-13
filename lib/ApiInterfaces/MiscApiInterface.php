<?php

namespace Aternos\ModrinthApi\ApiInterfaces;

use Aternos\ModrinthApi\Api\MiscApi;

/**
 * MiscApi Class Doc Comment
 *
 * @category Class
 * @package  Aternos\ModrinthApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
interface MiscApiInterface
{
    /**
     * Operation statistics
     *
     * Various statistics about this Modrinth instance
     *
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['statistics'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\Statistics
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function statistics(string $contentType = MiscApi::contentTypes['statistics'][0]);

    /**
     * Operation submitReport
     *
     * Report a project, user, or version
     *
     * @param \Aternos\ModrinthApi\Model\CreatableReport $creatable_report The report to be sent (optional)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['submitReport'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\Report|\Aternos\ModrinthApi\Model\InvalidInputError|\Aternos\ModrinthApi\Model\AuthError
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function submitReport($creatable_report = null, string $contentType = MiscApi::contentTypes['submitReport'][0]);
}