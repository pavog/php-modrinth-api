<?php

namespace Aternos\ModrinthApi\ApiInterfaces;

use Aternos\ModrinthApi\Api\VersionsApi;

/**
 * VersionsApi Class Doc Comment
 *
 * @category Class
 * @package  Aternos\ModrinthApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
interface VersionsApiInterface
{

    /**
     * Operation addFilesToVersion
     *
     * Add files to version
     *
     * @param string $id The ID of the version (required)
     * @param object $data data (optional)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['addFilesToVersion'] to see the possible values for this operation
     *
     * @return void
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function addFilesToVersion($id, $data = null, string $contentType = VersionsApi::contentTypes['addFilesToVersion'][0]);

    /**
     * Operation createVersion
     *
     * Create a version
     *
     * @param \Aternos\ModrinthApi\Model\CreatableVersion $data data (required)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['createVersion'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\Version|\Aternos\ModrinthApi\Model\InvalidInputError|\Aternos\ModrinthApi\Model\AuthError
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function createVersion($data, string $contentType = VersionsApi::contentTypes['createVersion'][0]);

    /**
     * Operation deleteVersion
     *
     * Delete a version
     *
     * @param string $id The ID of the version (required)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['deleteVersion'] to see the possible values for this operation
     *
     * @return void
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function deleteVersion($id, string $contentType = VersionsApi::contentTypes['deleteVersion'][0]);

    /**
     * Operation getProjectVersions
     *
     * List project&#39;s versions
     *
     * @param string $id_slug The ID or slug of the project (required)
     * @param string[] $loaders The types of loaders to filter for (optional)
     * @param string[] $game_versions The game versions to filter for (optional)
     * @param bool $featured Allows to filter for featured or non-featured versions only (optional)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['getProjectVersions'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\Version[]
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function getProjectVersions($id_slug, $loaders = null, $game_versions = null, $featured = null, string $contentType = VersionsApi::contentTypes['getProjectVersions'][0]);

    /**
     * Operation getVersion
     *
     * Get a version
     *
     * @param string $id The ID of the version (required)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['getVersion'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\Version
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function getVersion($id, string $contentType = VersionsApi::contentTypes['getVersion'][0]);

    /**
     * Operation getVersions
     *
     * Get multiple versions
     *
     * @param string $ids The IDs of the versions (required)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['getVersions'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\Version[]
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function getVersions($ids, string $contentType = VersionsApi::contentTypes['getVersions'][0]);

    /**
     * Operation modifyVersion
     *
     * Modify a version
     *
     * @param string $id The ID of the version (required)
     * @param \Aternos\ModrinthApi\Model\EditableVersion $editable_version Modified version fields (optional)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['modifyVersion'] to see the possible values for this operation
     *
     * @return void
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function modifyVersion($id, $editable_version = null, string $contentType = VersionsApi::contentTypes['modifyVersion'][0]);

    /**
     * Operation scheduleVersion
     *
     * Schedule a version
     *
     * @param string $id The ID of the version (required)
     * @param \Aternos\ModrinthApi\Model\Schedule $schedule Information about date and requested status (optional)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['scheduleVersion'] to see the possible values for this operation
     *
     * @return void
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function scheduleVersion($id, $schedule = null, string $contentType = VersionsApi::contentTypes['scheduleVersion'][0]);
}