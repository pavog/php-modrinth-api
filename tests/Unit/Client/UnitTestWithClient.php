<?php

namespace Aternos\ModrinthApi\Tests\Unit\Client;

use Aternos\ModrinthApi\Client\ModrinthAPIClient;
use Aternos\ModrinthApi\Model\CreatableProject;
use Aternos\ModrinthApi\Model\CreatableVersion;
use Aternos\ModrinthApi\Model\ProjectDonationURL;
use Aternos\ModrinthApi\Model\VersionDependency;
use Aternos\ModrinthApi\Tests\Unit\Client\Api\ApiStorage;

class UnitTestWithClient extends \PHPUnit\Framework\TestCase
{

    protected ModrinthAPIClient $client;

    protected function setUp(): void
    {
        $this->client = new ModrinthAPIClient(null, null, null, true);
    }

    protected function tearDown(): void
    {
        ApiStorage::getInstance()->clear();
    }

    /**
     * Returns a CreatableProject model for testing.
     *
     * @param string $slug
     * @return CreatableProject
     */
    protected function getTestProject(string $slug): CreatableProject
    {
        return (new CreatableProject())
            ->setSlug($slug)
            ->setTitle("Test Project")
            ->setDescription("This is a test project")
            ->setCategories(["Utility"])
            ->setClientSide(VersionDependency::DEPENDENCY_TYPE_OPTIONAL)
            ->setServerSide(VersionDependency::DEPENDENCY_TYPE_OPTIONAL)
            ->setBody("This is a test project")
            ->setAdditionalCategories(["Utility"])
            //->setIssuesUrl()
            //->setSourceUrl()
            //->setWikiUrl()
            //->setDiscordUrl()
            ->setDonationUrls([(new ProjectDonationURL())->setId("aternos")->setPlatform("aternos")->setUrl("https://aternos.org/go")])
            ->setLicenseId("mit")
            //->setLicenseUrl()
            //->setInitialVersions()
            //->setIsDraft()
            //->setGalleryItems()
            ->setProjectType("mod");
    }

    /**
     * Returns a CreatableVersion model for testing.
     * It does not have any dependencies.
     *
     * @param string $name
     * @param string $versionNumber
     * @param string $projectId
     * @return CreatableVersion
     */
    protected function getTestVersion(string $name, string $versionNumber, string $projectId): CreatableVersion
    {
        return (new CreatableVersion())
            ->setName($name)
            ->setVersionNumber($versionNumber)
            ->setChangelog("Initial release")
            //setDependencies()
            ->setGameVersions(["1.16.5"])
            ->setVersionType("release")
            ->setLoaders(["fabric"])
            ->setFeatured(true)
            ->setStatus(CreatableVersion::STATUS_LISTED)
            ->setRequestedStatus(null)
            ->setProjectId($projectId)
            ->setFileParts(["my-file.jar", "my-alternative-file.jar"])
            ->setPrimaryFile("my-file.jar");
    }

}