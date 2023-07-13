<?php

namespace Aternos\ModrinthApi\ApiInterfaces;

use Aternos\ModrinthApi\Api\DefaultApi;

/**
 * DefaultApi Class Doc Comment
 *
 * @category Class
 * @package  Aternos\ModrinthApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
interface DefaultApiInterface
{
    /**
     * Operation getModerationProjects
     *
     * Get a list of processing projects
     *
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['getModerationProjects'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\Project[]
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function getModerationProjects(string $contentType = DefaultApi::contentTypes['getModerationProjects'][0]);

    /**
     * Operation getReports
     *
     * Get reports
     *
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['getReports'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\Report[]
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function getReports(string $contentType = DefaultApi::contentTypes['getReports'][0]);
}