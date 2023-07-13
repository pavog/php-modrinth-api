<?php

namespace Aternos\ModrinthApi\Tests\Unit\Client\Api;

use Aternos\ModrinthApi\Api\ProjectsApi;
use Aternos\ModrinthApi\ApiException;
use Aternos\ModrinthApi\ApiInterfaces\ProjectsApiInterface;
use Aternos\ModrinthApi\Model\GalleryImage;
use Aternos\ModrinthApi\Model\Project;
use Aternos\ModrinthApi\Model\ProjectDependencyList;
use Aternos\ModrinthApi\Model\ProjectLicense;
use Aternos\ModrinthApi\Model\ProjectResult;
use Aternos\ModrinthApi\Model\SearchResults;
use DateTime;

class ProjectsApiLocal extends TestApi implements ProjectsApiInterface
{

    /**
     * @inheritDoc
     */
    public function addGalleryImage($id_slug, $ext, $featured, $title = null, $description = null, $ordering = null, $body = null, string $contentType = ProjectsApi::contentTypes['addGalleryImage'][0])
    {
        // TODO: Implement addGalleryImage() method.
    }

    /**
     * @inheritDoc
     */
    public function changeProjectIcon($id_slug, $ext, $body = null, string $contentType = ProjectsApi::contentTypes['changeProjectIcon'][0])
    {
        // TODO: Implement changeProjectIcon() method.
    }

    /**
     * @inheritDoc
     */
    public function checkProjectValidity($id_slug, string $contentType = ProjectsApi::contentTypes['checkProjectValidity'][0])
    {
        if (!$this->getStorage()->hasProject($id_slug)) {
            throw new ApiException("[404] Project '$id_slug' not found", 404);
        }

        $project = $this->getStorage()->getProject($id_slug);

        return (new \Aternos\ModrinthApi\Model\ProjectIdentifier())->setId($project->getSlug());
    }

    /**
     * @inheritDoc
     */
    public function createProject($data, $icon = null, string $contentType = ProjectsApi::contentTypes['createProject'][0])
    {
        $slug = $data->getSlug();

        if ($this->getStorage()->hasProject($slug)) {
            throw new ApiException("[400] Project with slug '$slug' already exists", 400);
        }

        // Convert CreatableProject to Project
        $project = (new Project())
            ->setSlug($slug)
            ->setTitle($data->getTitle())
            ->setDescription($data->getDescription())
            ->setCategories($data->getCategories())
            ->setClientSide($data->getClientSide())
            ->setServerSide($data->getServerSide())
            ->setBody($data->getBody())
            ->setAdditionalCategories($data->getAdditionalCategories())
            ->setIssuesUrl($data->getIssuesUrl())
            ->setSourceUrl($data->getSourceUrl())
            ->setWikiUrl($data->getWikiUrl())
            ->setDiscordUrl($data->getDiscordUrl())
            ->setDonationUrls($data->getDonationUrls())
            ->setProjectType($data->getProjectType());

        // add the missing attributes
        $project = $project->setdownloads(0)
            ->setIconUrl($icon ? "https://cdn.modrinth.com/data/wKkoqHrH/2dc273d840798d2784e8cafc3a697c20c8efecb9.png" : null)
            ->setColor(0xffffff)
            // Use the slug as id
            ->setId($data->getSlug())
            ->setTeam("modrinth")
            //->setBodyUrl()
            ->setModeratorMessage(null)
            ->setPublished((new DateTime('10 Jul 2023'))->format("c"))
            ->setUpdated((new DateTime('10 Jul 2023'))->format("c"))
            ->setUpdated((new DateTime('10 Jul 2023'))->format("c"))
            ->setApproved((new DateTime('10 Jul 2023'))->format("c"))
            ->setFollowers(0)
            ->setStatus(Project::STATUS_APPROVED)
            ->setLicense((new ProjectLicense())->setId("mit")->setName("MIT License")->setUrl("https://opensource.org/licenses/MIT"))
            //->setVersions([])
            ->setGameVersions(["1.20.1"])
            ->setLoaders(["fabric"])
            ->setGallery([
                (new GalleryImage())
                    ->setUrl("https://cdn.modrinth.com/data/UNJajBkf/images/ded731901f3064ba7180ba93beda3a527c06cbc9.png")
                    ->setFeatured(true)
                    ->setTitle("Test")
                    ->setDescription("Test description")
                    ->setCreated((new DateTime('10 Jul 2023'))->format("c"))
                    ->setOrdering(0)
            ]);

        $this->getStorage()->addProject($slug, $project);

        return $project;
    }

    /**
     * @inheritDoc
     */
    public function deleteGalleryImage($id_slug, $url, string $contentType = ProjectsApi::contentTypes['deleteGalleryImage'][0])
    {
        // TODO: Implement deleteGalleryImage() method.
    }

    /**
     * @inheritDoc
     */
    public function deleteProject($id_slug, string $contentType = ProjectsApi::contentTypes['deleteProject'][0])
    {
        // TODO: Implement deleteProject() method.
    }

    /**
     * @inheritDoc
     */
    public function deleteProjectIcon($id_slug, string $contentType = ProjectsApi::contentTypes['deleteProjectIcon'][0])
    {
        // TODO: Implement deleteProjectIcon() method.
    }

    /**
     * @inheritDoc
     */
    public function followProject($id_slug, string $contentType = ProjectsApi::contentTypes['followProject'][0])
    {
        // TODO: Implement followProject() method.
    }

    /**
     * @inheritDoc
     */
    public function getDependencies($id_slug, string $contentType = ProjectsApi::contentTypes['getDependencies'][0])
    {
        $versions = $this->getStorage()->getVersionsOfProject($id_slug);

        // projectIds / projectSlugs
        $projectIds = [];
        $versionIds = [];

        // collect ids of dependency projects and versions from all versions in the given project
        foreach ($versions as $version) {
            $dependencies = $version->getDependencies();
            foreach ($dependencies as $dependency) {
                $projectIds[] = $dependency->getProjectId();
                $versionIds[] = $dependency->getVersionId();
            }
        }

        return (new ProjectDependencyList())
            ->setProjects($this->getStorage()->getProjects($projectIds))
            ->setVersions($this->getStorage()->getVersions($versionIds));
    }

    /**
     * @inheritDoc
     */
    public function getProject($id_slug, string $contentType = ProjectsApi::contentTypes['getProject'][0])
    {
        if (!$this->getStorage()->hasProject($id_slug)) {
            throw new ApiException("[404] Project '$id_slug' not found", 404);
        }

        return $this->getStorage()->getProject($id_slug);
    }

    /**
     * @inheritDoc
     */
    public function getProjects($ids, string $contentType = ProjectsApi::contentTypes['getProjects'][0])
    {
        $idsArray = json_decode($ids, true);

        foreach ($idsArray as $id_slug) {
            if (!$this->getStorage()->hasProject($id_slug)) {
                throw new ApiException("[404] Project '$id_slug' not found", 404);
            }
        }

        // Return projects that match the keys
        return array_filter($this->getStorage()->getAllProjects(), function ($key) use ($idsArray) {
            return in_array($key, $idsArray);
        }, ARRAY_FILTER_USE_KEY);
    }

    /**
     * @inheritDoc
     */
    public function modifyGalleryImage($id_slug, $url, $featured = null, $title = null, $description = null, $ordering = null, string $contentType = ProjectsApi::contentTypes['modifyGalleryImage'][0])
    {
        // TODO: Implement modifyGalleryImage() method.
    }

    /**
     * @inheritDoc
     */
    public function modifyProject($id_slug, $editable_project = null, string $contentType = ProjectsApi::contentTypes['modifyProject'][0])
    {
        // TODO: Implement modifyProject() method.
    }

    /**
     * @inheritDoc
     */
    public function patchProjects($ids, $patch_projects_body = null, string $contentType = ProjectsApi::contentTypes['patchProjects'][0])
    {
        // TODO: Implement patchProjects() method.
    }

    /**
     * @inheritDoc
     */
    public function randomProjects($count, string $contentType = ProjectsApi::contentTypes['randomProjects'][0])
    {
        // Get random projects from the array of projects
        $randomProjectKeys = array_rand($this->getStorage()->getAllProjects(), $count);
        $randomProjectKeys = is_array($randomProjectKeys) ? $randomProjectKeys : [$randomProjectKeys];

        // Return the projects with the random keys
        return array_filter($this->getStorage()->getAllProjects(), function ($key) use ($randomProjectKeys) {
            return in_array($key, $randomProjectKeys);
        }, ARRAY_FILTER_USE_KEY);
    }

    /**
     * @inheritDoc
     */
    public function scheduleProject($id_slug, $schedule = null, string $contentType = ProjectsApi::contentTypes['scheduleProject'][0])
    {
        // TODO: Implement scheduleProject() method.
    }

    /**
     * @inheritDoc
     */
    public function searchProjects($query = null, $facets = null, $index = 'relevance', $offset = 0, $limit = 10, $filters = null, $version = null, string $contentType = ProjectsApi::contentTypes['searchProjects'][0])
    {
        // Filter projects by the given query using their id, slug, title or short description.
        $lowercaseQuery = strtolower($query);
        $filteredProjects = array_filter($this->getStorage()->getAllProjects(), function ($project) use ($lowercaseQuery) {
            return strtolower($project->getId()) === $lowercaseQuery
                // words in the query are contained in the slug, title or description
                || str_contains(strtolower($project->getSlug()), $lowercaseQuery)
                || str_contains(strtolower($project->getTitle()), $lowercaseQuery)
                || str_contains(strtolower($project->getDescription()), $lowercaseQuery);
        });

        // TODO: Filter projects by other parameters.

        // Respect limit and offset in filtered projects
        $slicedProjects = array_slice($filteredProjects, $offset, $limit);

        // Convert projects to project result
        $projectResults = array_map(function ($project) {
            return (new ProjectResult(json_decode(json_encode($project), true)));
        }, $slicedProjects);

        // Create SearchResults object
        return (new SearchResults())
            ->setTotalHits(count($filteredProjects))
            ->setOffset($offset)
            ->setLimit($limit)
            ->setHits($projectResults);
    }

    /**
     * @inheritDoc
     */
    public function unfollowProject($id_slug, string $contentType = ProjectsApi::contentTypes['unfollowProject'][0])
    {
        // TODO: Implement unfollowProject() method.
    }
}