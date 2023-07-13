<?php

namespace Aternos\ModrinthApi\Tests\Unit\Client\Api;

use Aternos\ModrinthApi\Model\Project;
use Aternos\ModrinthApi\Model\Version;

/**
 * Singleton class to store API data.
 * This storage is shared in all ...ApiLocal classes.
 */
class ApiStorage
{

    private static ApiStorage $instance;

    /**
     * @return ApiStorage
     */
    public static function getInstance(): ApiStorage
    {
        if (!isset(self::$instance)) {
            self::$instance = new ApiStorage();
        }
        return self::$instance;
    }

    /**
     * Key: Slug, Value: Project model
     * @var Project[]
     */
    private array $projects = [];

    /**
     * Key: Slug of project, Value: Array of Version models
     * @var Version[][]
     */
    private array $versions = [];

    /**
     * Returns an array of Projects. Key: Slug, Value: Project model
     * @return Project[]
     */
    public function getAllProjects(): array
    {
        return $this->projects;
    }

    /**
     * Returns an array of Projects. Key: Slug, Value: Project model
     * All projects with a slug in the given array will be returned.
     * @param string[] $slugs
     * @return array
     */
    public function getProjects(array $slugs): array
    {
        return array_filter($this->projects, function ($key) use ($slugs) {
            return in_array($key, $slugs);
        }, ARRAY_FILTER_USE_KEY);
    }

    /**
     * Returns a project by slug or null if not found.
     * @param string $slug
     * @return Project|null
     */
    public function getProject(string $slug): ?Project
    {
        return $this->projects[$slug] ?? null;
    }

    /**
     * Adds a project to the storage.
     * @param string $slug
     * @param Project $project
     * @return void
     */
    public function addProject(string $slug, Project $project): void
    {
        $this->projects[$slug] = $project;
    }

    /**
     * Returns true if a project with the given slug exists in the storage.
     * @param string $slug
     * @return bool
     */
    public function hasProject(string $slug): bool
    {
        return isset($this->projects[$slug]);
    }

    /**
     * Removes a project from the storage.
     * @param string $slug
     * @return void
     */
    public function removeProject(string $slug): void
    {
        unset($this->projects[$slug]);
    }

    /**
     * Adds a version to the storage.
     * @param string $projectSlug Slug of the project the version belongs to
     * @param Version $version
     * @return void
     */
    public function addVersionToProject(string $projectSlug, Version $version): void
    {
        $existingVersions = $this->getVersionsOfProject($projectSlug);
        $existingVersions[] = $version;
        $this->versions[$projectSlug] = $existingVersions;
    }

    /**
     * Returns an array of Versions of a project by slug.
     * @param string $projectSlug
     * @return Version[]
     */
    public function getVersionsOfProject(string $projectSlug): array
    {
        return $this->versions[$projectSlug] ?? [];
    }

    /**
     * Returns a flat array of Versions.
     * All versions with an ID in the given array will be returned.
     * @param string[] $ids
     * @return Version[]
     */
    public function getVersions(array $ids): array
    {
        $result = [];

        foreach ($this->versions as $versionsPerProject) {
            foreach ($versionsPerProject as $version) {
                if (in_array($version->getId(), $ids)) {
                    $result[] = $version;
                }
            }
        }

        return $result;
    }

    /**
     * Clears / resets the storage.
     * @return void
     */
    public function clear(): void
    {
        $this->projects = [];
        $this->versions = [];
    }

}