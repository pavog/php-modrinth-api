<?php

namespace Aternos\ModrinthApi\ApiInterfaces;

use Aternos\ModrinthApi\Api\UsersApi;

/**
 * UsersApi Class Doc Comment
 *
 * @category Class
 * @package  Aternos\ModrinthApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
interface UsersApiInterface
{
    /**
     * Operation changeUserIcon
     *
     * Change user&#39;s avatar
     *
     * @param string $id_username The ID or username of the user (required)
     * @param \SplFileObject $body body (optional)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['changeUserIcon'] to see the possible values for this operation
     *
     * @return void
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function changeUserIcon($id_username, $body = null, string $contentType = UsersApi::contentTypes['changeUserIcon'][0]);

    /**
     * Operation deleteUser
     *
     * Delete a user
     *
     * @param string $id_username The ID or username of the user (required)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['deleteUser'] to see the possible values for this operation
     *
     * @return void
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function deleteUser($id_username, string $contentType = UsersApi::contentTypes['deleteUser'][0]);

    /**
     * Operation getFollowedProjects
     *
     * Get user&#39;s followed projects
     *
     * @param string $id_username The ID or username of the user (required)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['getFollowedProjects'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\Project[]|\Aternos\ModrinthApi\Model\AuthError
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function getFollowedProjects($id_username, string $contentType = UsersApi::contentTypes['getFollowedProjects'][0]);

    /**
     * Operation getNotifications
     *
     * Get user&#39;s notifications
     *
     * @param string $id_username The ID or username of the user (required)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['getNotifications'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\Notification[]|\Aternos\ModrinthApi\Model\AuthError
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function getNotifications($id_username, string $contentType = UsersApi::contentTypes['getNotifications'][0]);

    /**
     * Operation getPayoutHistory
     *
     * Get user&#39;s payout history
     *
     * @param string $id_username The ID or username of the user (required)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['getPayoutHistory'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\UserPayoutHistory|\Aternos\ModrinthApi\Model\AuthError
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function getPayoutHistory($id_username, string $contentType = UsersApi::contentTypes['getPayoutHistory'][0]);

    /**
     * Operation getUser
     *
     * Get a user
     *
     * @param string $id_username The ID or username of the user (required)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['getUser'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\User
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function getUser($id_username, string $contentType = UsersApi::contentTypes['getUser'][0]);

    /**
     * Operation getUserFromAuth
     *
     * Get user from authorization header
     *
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['getUserFromAuth'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\User|\Aternos\ModrinthApi\Model\AuthError
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function getUserFromAuth(string $contentType = UsersApi::contentTypes['getUserFromAuth'][0]);

    /**
     * Operation getUserProjects
     *
     * Get user&#39;s projects
     *
     * @param string $id_username The ID or username of the user (required)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['getUserProjects'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\Project[]
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function getUserProjects($id_username, string $contentType = UsersApi::contentTypes['getUserProjects'][0]);

    /**
     * Operation getUsers
     *
     * Get multiple users
     *
     * @param string $ids The IDs of the users (required)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['getUsers'] to see the possible values for this operation
     *
     * @return \Aternos\ModrinthApi\Model\User[]
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function getUsers($ids, string $contentType = UsersApi::contentTypes['getUsers'][0]);

    /**
     * Operation modifyUser
     *
     * Modify a user
     *
     * @param string $id_username The ID or username of the user (required)
     * @param \Aternos\ModrinthApi\Model\EditableUser $editable_user Modified user fields (optional)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['modifyUser'] to see the possible values for this operation
     *
     * @return void
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function modifyUser($id_username, $editable_user = null, string $contentType = UsersApi::contentTypes['modifyUser'][0]);

    /**
     * Operation withdrawPayout
     *
     * Withdraw payout balance to PayPal or Venmo
     *
     * @param string $id_username The ID or username of the user (required)
     * @param int $amount Amount to withdraw (required)
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['withdrawPayout'] to see the possible values for this operation
     *
     * @return void
     * @throws \InvalidArgumentException
     * @throws \Aternos\ModrinthApi\ApiException on non-2xx response
     */
    public function withdrawPayout($id_username, $amount, string $contentType = UsersApi::contentTypes['withdrawPayout'][0]);
}