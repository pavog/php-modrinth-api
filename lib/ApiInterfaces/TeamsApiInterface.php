<?php

namespace Aternos\ModrinthApi\ApiInterfaces;

use Aternos\ModrinthApi\Api\TeamsApi;

/**
 * TeamsApi Class Doc Comment
 *
 * @category Class
 * @package  Aternos\ModrinthApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
interface TeamsApiInterface
{
    /**
     * Operation addTeamMember
     *
     * Add a user to a team
     *
     * @param string $id The ID of the team (required)
     * @param \Aternos\ModrinthApi\Model\UserIdentifier $user_identifier User to be added (must be the ID, usernames cannot be used here) (optional)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['addTeamMember'] to see the possible values for this operation
     *
     * @return void
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function addTeamMember($id, $user_identifier = null, string $contentType = TeamsApi::contentTypes['addTeamMember'][0]);

    /**
     * Operation deleteTeamMember
     *
     * Remove a member from a team
     *
     * @param string $id The ID of the team (required)
     * @param string $id_username The ID or username of the user (required)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['deleteTeamMember'] to see the possible values for this operation
     *
     * @return void
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function deleteTeamMember($id, $id_username, string $contentType = TeamsApi::contentTypes['deleteTeamMember'][0]);

    /**
     * Create request for operation 'deleteTeamMember'
     *
     * @param string $id The ID of the team (required)
     * @param string $id_username The ID or username of the user (required)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['deleteTeamMember'] to see the possible values for this operation
     *
     * @return \GuzzleHttp\Psr7\Request
     * @throws \InvalidArgumentException
     */
    public function deleteTeamMemberRequest($id, $id_username, string $contentType = TeamsApi::contentTypes['deleteTeamMember'][0]);

    /**
     * Operation getProjectTeamMembers
     *
     * Get a project&#39;s team members
     *
     * @param string $id_slug The ID or slug of the project (required)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['getProjectTeamMembers'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\TeamMember[]
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function getProjectTeamMembers($id_slug, string $contentType = TeamsApi::contentTypes['getProjectTeamMembers'][0]);

    /**
     * Operation getTeamMembers
     *
     * Get a team&#39;s members
     *
     * @param string $id The ID of the team (required)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['getTeamMembers'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\TeamMember[]
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function getTeamMembers($id, string $contentType = TeamsApi::contentTypes['getTeamMembers'][0]);

    /**
     * Operation getTeams
     *
     * Get the members of multiple teams
     *
     * @param string $ids The IDs of the teams (required)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['getTeams'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\TeamMember[][]
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function getTeams($ids, string $contentType = TeamsApi::contentTypes['getTeams'][0]);

    /**
     * Create request for operation 'getTeams'
     *
     * @param string $ids The IDs of the teams (required)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['getTeams'] to see the possible values for this operation
     *
     * @return \GuzzleHttp\Psr7\Request
     * @throws \InvalidArgumentException
     */
    public function getTeamsRequest($ids, string $contentType = TeamsApi::contentTypes['getTeams'][0]);

    /**
     * Operation joinTeam
     *
     * Join a team
     *
     * @param string $id The ID of the team (required)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['joinTeam'] to see the possible values for this operation
     *
     * @return void
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function joinTeam($id, string $contentType = TeamsApi::contentTypes['joinTeam'][0]);

    /**
     * Operation modifyTeamMember
     *
     * Modify a team member&#39;s information
     *
     * @param string $id The ID of the team (required)
     * @param string $user_id The ID of the user to modify (required)
     * @param \Aternos\ModrinthApi\Model\ModifyTeamMemberBody $modify_team_member_body Contents to be modified (optional)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['modifyTeamMember'] to see the possible values for this operation
     *
     * @return void
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function modifyTeamMember($id, $user_id, $modify_team_member_body = null, string $contentType = TeamsApi::contentTypes['modifyTeamMember'][0]);

    /**
     * Operation transferTeamOwnership
     *
     * Transfer team&#39;s ownership to another user
     *
     * @param string $id The ID of the team (required)
     * @param \Aternos\ModrinthApi\Model\UserIdentifier $user_identifier New owner&#39;s ID (optional)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['transferTeamOwnership'] to see the possible values for this operation
     *
     * @return void
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function transferTeamOwnership($id, $user_identifier = null, string $contentType = TeamsApi::contentTypes['transferTeamOwnership'][0]);
}