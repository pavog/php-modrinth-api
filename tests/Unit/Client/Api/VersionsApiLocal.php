<?php

namespace Aternos\ModrinthApi\Tests\Unit\Client\Api;

use Aternos\ModrinthApi\Api\VersionsApi;
use Aternos\ModrinthApi\ApiException;
use Aternos\ModrinthApi\Model\Version;
use Aternos\ModrinthApi\Model\VersionFile;
use Aternos\ModrinthApi\Model\VersionFileHashes;
use DateTime;

class VersionsApiLocal extends TestApi implements \Aternos\ModrinthApi\ApiInterfaces\VersionsApiInterface
{

    /**
     * @inheritDoc
     */
    public function addFilesToVersion($id, $data = null, string $contentType = VersionsApi::contentTypes['addFilesToVersion'][0])
    {
        // TODO: Implement addFilesToVersion() method.
    }

    /**
     * @inheritDoc
     */
    public function createVersion($data, string $contentType = VersionsApi::contentTypes['createVersion'][0])
    {
        $projectId = $data->getProjectId();

        // check if a project with this slug exists
        // we treat the slug as the id because we also do so in ProjectsApiLocal
        if (!$this->getStorage()->hasProject($projectId)) {
            throw new ApiException("[404] Project '$projectId' not found", 404);
        }

        // covert the creatable version to a version
        $version = (new Version())
            ->setName($data->getName())
            ->setVersionNumber($data->getVersionNumber())
            ->setChangelog($data->getChangelog())
            ->setDependencies($data->getDependencies())
            ->setGameVersions($data->getGameVersions())
            ->setVersionType($data->getVersionType())
            ->setLoaders($data->getLoaders())
            ->setFeatured($data->getFeatured())
            ->setStatus($data->getStatus())
            ->setRequestedStatus($data->getRequestedStatus())
            ->setProjectId($projectId);

        // add the missing attributes
        $version = $version->setDownloads(0)
            // use version name as version id
            ->setId($data->getName())
            ->setAuthorId("aternos")
            ->setDatePublished((new DateTime('10 Jul 2023'))->format("c"));
        //->setChangelogUrl($data->getChangelogUrl())

        // create a versionfile
        $versionFile = (new VersionFile())
            ->setFilename("mod.jar")
            ->setUrl("https://cdn-raw.modrinth.com/data/aternos/versions/wKkoqHrH/mod.jar")
            ->setPrimary(true)
            ->setSize(3500)
            //->setFileType("jar")
            ->setFilename(VersionFile::FILE_TYPE_REQUIRED_RESOURCE_PACK)
            ->setHashes(
                (new VersionFileHashes())
                    ->setSha1("ec4c580988b73cd6ae2f8a6539e5918e500926c9")
                    ->setSha512("5014d17abff85f4a59f56f341582edf699f83b3c9f423bec1968679a186156a4")
            );

        $version = $version->setFiles([$versionFile]);

        $this->getStorage()->addVersionToProject($projectId, $version);

        return $version;
    }

    /**
     * @inheritDoc
     */
    public function deleteVersion($id, string $contentType = VersionsApi::contentTypes['deleteVersion'][0])
    {
        // TODO: Implement deleteVersion() method.
    }

    /**
     * @inheritDoc
     */
    public function getProjectVersions($id_slug, $loaders = null, $game_versions = null, $featured = null, string $contentType = VersionsApi::contentTypes['getProjectVersions'][0])
    {
        // TODO: Implement getProjectVersions() method.
    }

    /**
     * @inheritDoc
     */
    public function getVersion($id, string $contentType = VersionsApi::contentTypes['getVersion'][0])
    {
        // TODO: Implement getVersion() method.
    }

    /**
     * @inheritDoc
     */
    public function getVersions($ids, string $contentType = VersionsApi::contentTypes['getVersions'][0])
    {
        // TODO: Implement getVersions() method.
    }

    /**
     * @inheritDoc
     */
    public function modifyVersion($id, $editable_version = null, string $contentType = VersionsApi::contentTypes['modifyVersion'][0])
    {
        // TODO: Implement modifyVersion() method.
    }

    /**
     * @inheritDoc
     */
    public function scheduleVersion($id, $schedule = null, string $contentType = VersionsApi::contentTypes['scheduleVersion'][0])
    {
        // TODO: Implement scheduleVersion() method.
    }
}