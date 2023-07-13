<?php

namespace Aternos\ModrinthApi\Tests\Unit\Client;

use Aternos\ModrinthApi\Model\VersionDependency;

class ClientProjectTest extends UnitTestWithClient
{
    public function testThrowsExceptionWhenProjectSlugAlreadyExists(): void
    {
        // Create a new project
        $this->client->createProject($this->getTestProject("test-project"));

        // Create a new project with the same slug and expect an exception
        $this->expectException(\Aternos\ModrinthApi\ApiException::class);
        $this->client->createProject($this->getTestProject("test-project"));
    }

    public function testGetProjectReturnsTheCreatedProject(): void
    {
        // Create project
        $creatableProject = $this->getTestProject("test-project");
        $this->client->createProject($creatableProject);

        // Get project
        $createdProject = $this->client->getProject("test-project");

        // Compare
        $this->assertEquals($creatableProject->getSlug(), $createdProject->getData()->getSlug());
        $this->assertEquals($creatableProject->getTitle(), $createdProject->getData()->getTitle());
        $this->assertEquals($creatableProject->getDescription(), $createdProject->getData()->getDescription());
        $this->assertEquals($creatableProject->getCategories(), $createdProject->getData()->getCategories());
        $this->assertEquals($creatableProject->getClientSide(), $createdProject->getData()->getClientSide());
        $this->assertEquals($creatableProject->getServerSide(), $createdProject->getData()->getServerSide());
        $this->assertEquals($creatableProject->getBody(), $createdProject->getData()->getBody());
        $this->assertEquals($creatableProject->getAdditionalCategories(), $createdProject->getData()->getAdditionalCategories());
        $this->assertEquals($creatableProject->getIssuesUrl(), $createdProject->getData()->getIssuesUrl());
        $this->assertEquals($creatableProject->getSourceUrl(), $createdProject->getData()->getSourceUrl());
        $this->assertEquals($creatableProject->getWikiUrl(), $createdProject->getData()->getWikiUrl());
        $this->assertEquals($creatableProject->getDiscordUrl(), $createdProject->getData()->getDiscordUrl());
        $this->assertEquals($creatableProject->getDonationUrls(), $createdProject->getData()->getDonationUrls());
        $this->assertEquals($creatableProject->getProjectType(), $createdProject->getData()->getProjectType());
    }

    public function testGetProjectsReturnsArrayOfProjects(): void
    {
        // Create test-project1
        $creatableProject1 = $this->getTestProject("test-project1");
        $this->client->createProject($creatableProject1);

        // Create test-project2
        $creatableProject2 = $this->getTestProject("test-project2");
        $this->client->createProject($creatableProject2);

        // Get both projects
        $projects = $this->client->getProjects(["test-project1", "test-project2"]);

        // Check
        $this->assertIsArray($projects);
        $this->assertContainsOnlyInstancesOf(\Aternos\ModrinthApi\Client\Project::class, $projects);
        $this->assertCount(2, $projects);
    }

    public function testSearchProjectsReturnsMatchingProject(): void
    {
        // Create test-project1
        $creatableProject1 = $this->getTestProject("test-project1");
        $this->client->createProject($creatableProject1);

        // Create test-project2
        $creatableProject2 = $this->getTestProject("test-project2");
        $this->client->createProject($creatableProject2);

        // Search "test-project1"
        $searchOptions = (new \Aternos\ModrinthApi\Client\Options\ProjectSearchOptions())->setQuery("test-project1");
        $paginatedProjectSearchList = $this->client->searchProjects($searchOptions);

        // Check
        $this->assertEquals(1, $paginatedProjectSearchList->count());

        $result = $paginatedProjectSearchList->getResults();
        $this->assertIsArray($result);
        $this->assertContainsOnlyInstancesOf(\Aternos\ModrinthApi\Client\SearchProject::class, $result);
        $this->assertCount(1, $result);
    }

    public function testSearchProjectsReturnsMatchingProjects(): void
    {
        // Create test-project1
        $creatableProject1 = $this->getTestProject("test-project1");
        $this->client->createProject($creatableProject1);

        // Create test-project2
        $creatableProject2 = $this->getTestProject("test-project2");
        $this->client->createProject($creatableProject2);

        // Search both projects
        $searchOptions = (new \Aternos\ModrinthApi\Client\Options\ProjectSearchOptions())->setQuery("test-project");
        $paginatedProjectSearchList = $this->client->searchProjects($searchOptions);

        // Check
        $this->assertEquals(2, $paginatedProjectSearchList->count());

        $result = $paginatedProjectSearchList->getResults();
        $this->assertIsArray($result);
        $this->assertContainsOnlyInstancesOf(\Aternos\ModrinthApi\Client\SearchProject::class, $result);
        $this->assertCount(2, $result);
    }

    public function testGetRandomProjectsReturnsOneProject(): void
    {
        // Create test-project1
        $creatableProject1 = $this->getTestProject("test-project1");
        $this->client->createProject($creatableProject1);

        // Create test-project2
        $creatableProject2 = $this->getTestProject("test-project2");
        $this->client->createProject($creatableProject2);

        // Get 1 random project
        $projects = $this->client->getRandomProjects(1);

        // Check
        $this->assertIsArray($projects);
        $this->assertContainsOnlyInstancesOf(\Aternos\ModrinthApi\Client\Project::class, $projects);
        $this->assertCount(1, $projects);
    }

    public function testGetRandomProjectsReturnsMultipleProjects(): void
    {
        // Create test-project1
        $creatableProject1 = $this->getTestProject("test-project1");
        $this->client->createProject($creatableProject1);

        // Create test-project2
        $creatableProject2 = $this->getTestProject("test-project2");
        $this->client->createProject($creatableProject2);

        // Get 2 random projects
        $projects = $this->client->getRandomProjects(2);

        // Check
        $this->assertIsArray($projects);
        $this->assertContainsOnlyInstancesOf(\Aternos\ModrinthApi\Client\Project::class, $projects);
        $this->assertCount(2, $projects);
    }

    public function testCheckProjectValidityReturnsNullWhenProjectDoesNotExist(): void
    {
        // Do not create a project
        // Check project validity
        $this->assertNull($this->client->checkProjectValidity("does-not-exist"));
    }

    public function testCheckProjectValidityReturnsProjectSlug(): void
    {
        // Create test-project
        $creatableProject = $this->getTestProject("test-project");
        $this->client->createProject($creatableProject);

        // Check project validity
        $this->assertEquals("test-project", $this->client->checkProjectValidity("test-project"));
    }

    public function testGetProjectDependenciesReturnsEmptyDependencies(): void
    {
        // Create test-project
        $creatableProject = $this->getTestProject("test-project");
        $this->client->createProject($creatableProject);

        // Get project dependencies
        $dependencies = $this->client->getProjectDependencies("test-project");
        $this->assertEmpty($dependencies->getProjects());
        $this->assertEmpty($dependencies->getVersions());
    }

    public function testGetProjectDependenciesReturnsOneDependency(): void
    {
        // Create test-project
        $creatableProject = $this->getTestProject("test-project");
        $this->client->createProject($creatableProject);

        // Create dependency-project
        $creatableDependencyProject = $this->getTestProject("dependency-project");
        $dependencyProject = $this->client->createProject($creatableDependencyProject);

        // Create Version 1.0.0 for test-project and add a dependency on dependency-project
        $creatableVersion = $this->getTestVersion("Version 1.0.0", "1.0.0", "test-project")
            ->setDependencies([
                (new \Aternos\ModrinthApi\Model\VersionDependency())
                    ->setVersionId("Version 1.0.0")
                    ->setProjectId("dependency-project")
                    ->setDependencyType(VersionDependency::DEPENDENCY_TYPE_REQUIRED)
            ]);
        $testVersion = $this->client->createVersion($creatableVersion);

        // Check that test-project has exactly one dependency
        $testProjectDependencies = $this->client->getProjectDependencies("test-project");
        $this->assertCount(1, $testProjectDependencies->getProjects());
        $this->assertEquals($dependencyProject, $testProjectDependencies->getProjects()[0]);
        $this->assertCount(1, $testProjectDependencies->getVersions());
        $this->assertEquals($testVersion, $testProjectDependencies->getVersions()[0]);


        // Check that dependency-project has no dependencies
        $dependencyProjectDependencies = $this->client->getProjectDependencies("dependency-project");
        $this->assertEmpty($dependencyProjectDependencies->getProjects());
        $this->assertEmpty($dependencyProjectDependencies->getVersions());
    }

}