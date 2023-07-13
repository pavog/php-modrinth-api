<?php

namespace Aternos\ModrinthApi\ApiInterfaces;

use Aternos\ModrinthApi\Api\ProjectsApi;

/**
 * ProjectsApi Class Doc Comment
 *
 * @category Class
 * @package  Aternos\ModrinthApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
interface ProjectsApiInterface
{
    /**
     * Operation createProject
     *
     * Create a project
     *
     * @param \Aternos\ModrinthApi\Model\CreatableProject $data data (required)
     * @param \SplFileObject $icon Project icon file (optional)
     * @param string $contentType The value for the Content-Type header. Check ProjectsApi::contentTypes['createProject'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\Project|\Aternos\ModrinthApi\Model\InvalidInputError|\Aternos\ModrinthApi\Model\AuthError
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function createProject($data, $icon = null, string $contentType = ProjectsApi::contentTypes['createProject'][0]);

    /**
     * Operation deleteProject
     *
     * Delete a project
     *
     * @param string $id_slug The ID or slug of the project (required)
     * @param string $contentType The value for the Content-Type header. Check ProjectsApi::contentTypes['deleteProject'] to see the possible values for this operation
     *
     * @return void
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function deleteProject($id_slug, string $contentType = ProjectsApi::contentTypes['deleteProject'][0]);

    /**
     * Operation changeProjectIcon
     *
     * Change project&#39;s icon
     *
     * @param string $id_slug The ID or slug of the project (required)
     * @param string $ext Image extension (required)
     * @param \SplFileObject $body body (optional)
     * @param string $contentType The value for the Content-Type header. Check ProjectsApi::contentTypes['changeProjectIcon'] to see the possible values for this operation
     *
     * @return void
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function changeProjectIcon($id_slug, $ext, $body = null, string $contentType = ProjectsApi::contentTypes['changeProjectIcon'][0]);

    /**
     * Operation deleteProjectIcon
     *
     * Delete project&#39;s icon
     *
     * @param string $id_slug The ID or slug of the project (required)
     * @param string $contentType The value for the Content-Type header. Check ProjectsApi::contentTypes['deleteProjectIcon'] to see the possible values for this operation
     *
     * @return void
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function deleteProjectIcon($id_slug, string $contentType = ProjectsApi::contentTypes['deleteProjectIcon'][0]);

    /**
     * Operation getDependencies
     *
     * Get all of a project&#39;s dependencies
     *
     * @param string $id_slug The ID or slug of the project (required)
     * @param string $contentType The value for the Content-Type header. Check ProjectsApi::contentTypes['getDependencies'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\ProjectDependencyList
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function getDependencies($id_slug, string $contentType = ProjectsApi::contentTypes['getDependencies'][0]);

    /**
     * Operation getProject
     *
     * Get a project
     *
     * @param string $id_slug The ID or slug of the project (required)
     * @param string $contentType The value for the Content-Type header. Check ProjectsApi::contentTypes['getProject'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\Project
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function getProject($id_slug, string $contentType = ProjectsApi::contentTypes['getProject'][0]);

    /**
     * Operation getProjects
     *
     * Get multiple projects
     *
     * @param string $ids The IDs of the projects (required)
     * @param string $contentType The value for the Content-Type header. Check ProjectsApi::contentTypes['getProjects'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\Project[]
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function getProjects($ids, string $contentType = ProjectsApi::contentTypes['getProjects'][0]);

    /**
     * Operation modifyProject
     *
     * Modify a project
     *
     * @param string $id_slug The ID or slug of the project (required)
     * @param \Aternos\ModrinthApi\Model\EditableProject $editable_project Modified project fields (optional)
     * @param string $contentType The value for the Content-Type header. Check ProjectsApi::contentTypes['modifyProject'] to see the possible values for this operation
     *
     * @return void
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function modifyProject($id_slug, $editable_project = null, string $contentType = ProjectsApi::contentTypes['modifyProject'][0]);

    /**
     * Operation patchProjects
     *
     * Edit multiple projects
     *
     * @param string $ids The IDs of the projects (required)
     * @param \Aternos\ModrinthApi\Model\PatchProjectsBody $patch_projects_body Fields to edit on all projects specified (optional)
     * @param string $contentType The value for the Content-Type header. Check ProjectsApi::contentTypes['patchProjects'] to see the possible values for this operation
     *
     * @return void
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function patchProjects($ids, $patch_projects_body = null, string $contentType = ProjectsApi::contentTypes['patchProjects'][0]);

    /**
     * Operation checkProjectValidity
     *
     * Check project slug/ID validity
     *
     * @param string $id_slug The ID or slug of the project (required)
     * @param string $contentType The value for the Content-Type header. Check ProjectsApi::contentTypes['checkProjectValidity'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\ProjectIdentifier
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function checkProjectValidity($id_slug, string $contentType = ProjectsApi::contentTypes['checkProjectValidity'][0]);

    /**
     * Operation randomProjects
     *
     * Get a list of random projects
     *
     * @param int $count The number of random projects to return (required)
     * @param string $contentType The value for the Content-Type header. Check ProjectsApi::contentTypes['randomProjects'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\Project[]|\Aternos\ModrinthApi\Model\InvalidInputError
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function randomProjects($count, string $contentType = ProjectsApi::contentTypes['randomProjects'][0]);

    /**
     * Operation scheduleProject
     *
     * Schedule a project
     *
     * @param string $id_slug The ID or slug of the project (required)
     * @param \Aternos\ModrinthApi\Model\Schedule $schedule Information about date and requested status (optional)
     * @param string $contentType The value for the Content-Type header. Check ProjectsApi::contentTypes['scheduleProject'] to see the possible values for this operation
     *
     * @return void
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function scheduleProject($id_slug, $schedule = null, string $contentType = ProjectsApi::contentTypes['scheduleProject'][0]);

    /**
     * Operation searchProjects
     *
     * Search projects
     *
     * @param string $query The query to search for (optional)
     * @param string[][] $facets The recommended way of filtering search results. [Learn more about using facets.](/docs/tutorials/api_search) (optional)
     * @param string $index The sorting method used for sorting search results (optional, default to 'relevance')
     * @param int $offset The offset into the search. Skips this number of results (optional, default to 0)
     * @param int $limit The number of results returned by the search (optional, default to 10)
     * @param string $filters A list of filters relating to the properties of a project. Use filters when there isn&#39;t an available facet for your needs. [More information](https://docs.meilisearch.com/reference/features/filtering.html) (optional)
     * @param string $version A list of filters relating to the versions of a project. Use of facets for filtering by version is recommended (optional) (deprecated)
     * @param string $contentType The value for the Content-Type header. Check ProjectsApi::contentTypes['searchProjects'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\SearchResults|\Aternos\ModrinthApi\Model\InvalidInputError
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function searchProjects($query = null, $facets = null, $index = 'relevance', $offset = 0, $limit = 10, $filters = null, $version = null, string $contentType = ProjectsApi::contentTypes['searchProjects'][0]);

    /**
     * Operation followProject
     *
     * Follow a project
     *
     * @param string $id_slug The ID or slug of the project (required)
     * @param string $contentType The value for the Content-Type header. Check ProjectsApi::contentTypes['followProject'] to see the possible values for this operation
     *
     * @return void
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function followProject($id_slug, string $contentType = ProjectsApi::contentTypes['followProject'][0]);

    /**
     * Operation unfollowProject
     *
     * Unfollow a project
     *
     * @param string $id_slug The ID or slug of the project (required)
     * @param string $contentType The value for the Content-Type header. Check ProjectsApi::contentTypes['unfollowProject'] to see the possible values for this operation
     *
     * @return void
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function unfollowProject($id_slug, string $contentType = ProjectsApi::contentTypes['unfollowProject'][0]);

    /**
     * Operation addGalleryImage
     *
     * Add a gallery image
     *
     * @param string $id_slug The ID or slug of the project (required)
     * @param string $ext Image extension (required)
     * @param bool $featured Whether an image is featured (required)
     * @param string $title Title of the image (optional)
     * @param string $description Description of the image (optional)
     * @param int $ordering Ordering of the image (optional)
     * @param \SplFileObject $body body (optional)
     * @param string $contentType The value for the Content-Type header. Check ProjectsApi::contentTypes['addGalleryImage'] to see the possible values for this operation
     *
     * @return void
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function addGalleryImage($id_slug, $ext, $featured, $title = null, $description = null, $ordering = null, $body = null, string $contentType = ProjectsApi::contentTypes['addGalleryImage'][0]);

    /**
     * Operation modifyGalleryImage
     *
     * Modify a gallery image
     *
     * @param string $id_slug The ID or slug of the project (required)
     * @param string $url URL link of the image to modify (required)
     * @param bool $featured Whether the image is featured (optional)
     * @param string $title New title of the image (optional)
     * @param string $description New description of the image (optional)
     * @param int $ordering New ordering of the image (optional)
     * @param string $contentType The value for the Content-Type header. Check ProjectsApi::contentTypes['modifyGalleryImage'] to see the possible values for this operation
     *
     * @return void
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function modifyGalleryImage($id_slug, $url, $featured = null, $title = null, $description = null, $ordering = null, string $contentType = ProjectsApi::contentTypes['modifyGalleryImage'][0]);

    /**
     * Operation deleteGalleryImage
     *
     * Delete a gallery image
     *
     * @param string $id_slug The ID or slug of the project (required)
     * @param string $url URL link of the image to delete (required)
     * @param string $contentType The value for the Content-Type header. Check ProjectsApi::contentTypes['deleteGalleryImage'] to see the possible values for this operation
     *
     * @return void
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function deleteGalleryImage($id_slug, $url, string $contentType = ProjectsApi::contentTypes['deleteGalleryImage'][0]);

}