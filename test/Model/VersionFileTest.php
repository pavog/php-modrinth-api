<?php
/**
 * VersionFileTest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Aternos\ModrinthApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Labrinth
 *
 * **Remember to join our [Discord](https://discord.gg/EUHuJHt) if you need any support!**  ## Authentication This API uses GitHub tokens for authentication. The token is in the `Authorization` header of the request.  Example: ``` Authorization: gho_pJ9dGXVKpfzZp4PUHSxYEq9hjk0h288Gwj4S ```  You do not need a token for most requests. Generally speaking, only the following types of requests require a token: - those which create data (such as version creation) - those which modify data (such as editing a project) - those which access private data (such as draft projects and notifications)  Applications interacting with the authenticated API should either retrieve the Modrinth GitHub token through the site or create a personal app token for use with Modrinth. The API provides a couple routes for auth -- don't implement this flow in your application! Instead, use a personal access token or create your own GitHub OAuth2 application. This system will be revisited and allow easier interaction with the authenticated subset of the API once we roll out our own authentication system.  ## Cross-Origin Resource Sharing This API features Cross-Origin Resource Sharing (CORS) implemented in compliance with the [W3C spec](https://www.w3.org/TR/cors/). This allows for cross-domain communication from the browser. All responses have a wildcard same-origin which makes them completely public and accessible to everyone, including any code on any site.  ## Ratelimits The API has a ratelimit defined per IP. Limits and remaining amounts are given in the response headers. - `X-Ratelimit-Limit`: the maximum number of requests that can be made in a minute - `X-Ratelimit-Remaining`: the number of requests remaining in the current ratelimit window - `X-Ratelimit-Reset`: the time in seconds until the ratelimit window resets  Ratelimits are the same no matter whether you use a token or not. The ratelimit is currently 300 requests per minute. If you have a use case requiring a higher limit, please [contact us](mailto:admin@modrinth.com).  ## User Agents To access the Modrinth API, you **must** use provide a uniquely-identifying `User-Agent` header. Providing a user agent that only identifies your HTTP client library (such as \"okhttp/4.9.3\") increases the likelihood that we will block your traffic. It is recommended, but not required, to include contact information in your user agent. This allows us to contact you if we would like a change in your application's behavior without having to block your traffic. - Bad: `User-Agent: okhttp/4.9.3` - Good: `User-Agent: project_name` - Better: `User-Agent: github_username/project_name/1.56.0` - Best: `User-Agent: github_username/project_name/1.56.0 (launcher.com)` or `User-Agent: github_username/project_name/1.56.0 (contact@launcher.com)`
 *
 * The version of the OpenAPI document: v2.7.0/3b22f59
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace Aternos\ModrinthApi\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * VersionFileTest Class Doc Comment
 *
 * @category    Class
 * @description VersionFile
 * @package     Aternos\ModrinthApi
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class VersionFileTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "VersionFile"
     */
    public function testVersionFile()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "hashes"
     */
    public function testPropertyHashes()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "url"
     */
    public function testPropertyUrl()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "filename"
     */
    public function testPropertyFilename()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "primary"
     */
    public function testPropertyPrimary()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "size"
     */
    public function testPropertySize()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "file_type"
     */
    public function testPropertyFileType()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
