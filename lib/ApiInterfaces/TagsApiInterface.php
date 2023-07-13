<?php

namespace Aternos\ModrinthApi\ApiInterfaces;

use Aternos\ModrinthApi\Api\TagsApi;

/**
 * TagsApi Class Doc Comment
 *
 * @category Class
 * @package  Aternos\ModrinthApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
interface TagsApiInterface
{
    /**
     * Operation categoryList
     *
     * Get a list of categories
     *
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['categoryList'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\CategoryTag[]
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function categoryList(string $contentType = TagsApi::contentTypes['categoryList'][0]);

    /**
     * Operation donationPlatformList
     *
     * Get a list of donation platforms
     *
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['donationPlatformList'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\DonationPlatformTag[]
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function donationPlatformList(string $contentType = TagsApi::contentTypes['donationPlatformList'][0]);

    /**
     * Operation licenseList
     *
     * Get a list of licenses
     *
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['licenseList'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\LicenseTag[]
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function licenseList(string $contentType = TagsApi::contentTypes['licenseList'][0]);

    /**
     * Operation loaderList
     *
     * Get a list of loaders
     *
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['loaderList'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\LoaderTag[]
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function loaderList(string $contentType = TagsApi::contentTypes['loaderList'][0]);

    /**
     * Operation reportTypeList
     *
     * Get a list of report types
     *
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['reportTypeList'] to see the possible values for this operation
     *
     * @return string[]
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function reportTypeList(string $contentType = TagsApi::contentTypes['reportTypeList'][0]);

    /**
     * Operation versionList
     *
     * Get a list of game versions
     *
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['versionList'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\GameVersionTag[]
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function versionList(string $contentType = TagsApi::contentTypes['versionList'][0]);
}