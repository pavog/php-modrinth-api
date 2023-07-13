<?php

namespace Aternos\ModrinthApi\ApiInterfaces;

use Aternos\ModrinthApi\Api\VersionFilesApi;

/**
 * VersionFilesApi Class Doc Comment
 *
 * @category Class
 * @package  Aternos\ModrinthApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
interface VersionFilesApiInterface
{
    /**
     * Operation deleteFileFromHash
     *
     * Delete a file from its hash
     *
     * @param string $hash The hash of the file, considering its byte content, and encoded in hexadecimal (required)
     * @param string $algorithm The algorithm of the hash (required)
     * @param string $version_id Version ID to delete the version from, if multiple files of the same hash exist (optional)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['deleteFileFromHash'] to see the possible values for this operation
     *
     * @return void
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function deleteFileFromHash($hash, $algorithm, $version_id = null, string $contentType = VersionFilesApi::contentTypes['deleteFileFromHash'][0]);

    /**
     * Operation getLatestVersionFromHash
     *
     * Latest version of a project from a hash, loader(s), and game version(s)
     *
     * @param string $hash The hash of the file, considering its byte content, and encoded in hexadecimal (required)
     * @param string $algorithm The algorithm of the hash (required)
     * @param \Aternos\ModrinthApi\Model\GetLatestVersionFromHashBody $get_latest_version_from_hash_body Parameters of the updated version requested (optional)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['getLatestVersionFromHash'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\Version
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function getLatestVersionFromHash($hash, $algorithm, $get_latest_version_from_hash_body = null, string $contentType = VersionFilesApi::contentTypes['getLatestVersionFromHash'][0]);

    /**
     * Operation getLatestVersionsFromHashes
     *
     * Latest versions of multiple project from hashes, loader(s), and game version(s)
     *
     * @param \Aternos\ModrinthApi\Model\GetLatestVersionsFromHashesBody $get_latest_versions_from_hashes_body Parameters of the updated version requested (optional)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['getLatestVersionsFromHashes'] to see the possible values for this operation
     *
     * @return array<string,\Aternos\ModrinthApi\Model\Version>
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function getLatestVersionsFromHashes($get_latest_versions_from_hashes_body = null, string $contentType = VersionFilesApi::contentTypes['getLatestVersionsFromHashes'][0]);

    /**
     * Operation versionFromHash
     *
     * Get version from hash
     *
     * @param string $hash The hash of the file, considering its byte content, and encoded in hexadecimal (required)
     * @param string $algorithm The algorithm of the hash (required)
     * @param bool $multiple Whether to return multiple results when looking for this hash (optional, default to false)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['versionFromHash'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\Version
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function versionFromHash($hash, $algorithm, $multiple = false, string $contentType = VersionFilesApi::contentTypes['versionFromHash'][0]);

    /**
     * Operation versionsFromHashes
     *
     * Get versions from hashes
     *
     * @param \Aternos\ModrinthApi\Model\HashList $hash_list Hashes and algorithm of the versions requested (optional)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['versionsFromHashes'] to see the possible values for this operation
     *
     * @return array<string,\Aternos\ModrinthApi\Model\Version>
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function versionsFromHashes($hash_list = null, string $contentType = VersionFilesApi::contentTypes['versionsFromHashes'][0]);
}