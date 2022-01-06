<?php
/**
 * AttachmentControllerApiTest
 * PHP version 5
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MailSlurp API
 *
 * MailSlurp is an API for sending and receiving emails from dynamically allocated email addresses. It's designed for developers and QA teams to test applications, process inbound emails, send templated notifications, attachments, and more.  ## Resources  - [Homepage](https://www.mailslurp.com) - Get an [API KEY](https://app.mailslurp.com/sign-up/) - Generated [SDK Clients](https://www.mailslurp.com/docs/) - [Examples](https://github.com/mailslurp/examples) repository
 *
 * The version of the OpenAPI document: 6.5.2
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace MailSlurp;

use \MailSlurp\Configuration;
use \MailSlurp\ApiException;
use \MailSlurp\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * AttachmentControllerApiTest Class Doc Comment
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AttachmentControllerApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for deleteAllAttachments
     *
     * Delete all attachments.
     *
     */
    public function testDeleteAllAttachments()
    {
    }

    /**
     * Test case for deleteAttachment
     *
     * Delete an attachment.
     *
     */
    public function testDeleteAttachment()
    {
    }

    /**
     * Test case for downloadAttachmentAsBase64Encoded
     *
     * Get email attachment as base64 encoded string as alternative to binary responses. To read the content decode the Base64 encoded contents..
     *
     */
    public function testDownloadAttachmentAsBase64Encoded()
    {
    }

    /**
     * Test case for downloadAttachmentAsBytes
     *
     * Download attachments. Get email attachment bytes. If you have trouble with byte responses try the `downloadAttachmentBase64` response endpoints..
     *
     */
    public function testDownloadAttachmentAsBytes()
    {
    }

    /**
     * Test case for getAttachment
     *
     * Get an attachment entity.
     *
     */
    public function testGetAttachment()
    {
    }

    /**
     * Test case for getAttachmentInfo
     *
     * Get email attachment metadata information.
     *
     */
    public function testGetAttachmentInfo()
    {
    }

    /**
     * Test case for getAttachments1
     *
     * Get email attachments.
     *
     */
    public function testGetAttachments1()
    {
    }

    /**
     * Test case for uploadAttachment
     *
     * Upload an attachment for sending using base64 file encoding. Returns an array whose first element is the ID of the uploaded attachment..
     *
     */
    public function testUploadAttachment()
    {
    }

    /**
     * Test case for uploadAttachmentBytes
     *
     * Upload an attachment for sending using file byte stream input octet stream. Returns an array whose first element is the ID of the uploaded attachment..
     *
     */
    public function testUploadAttachmentBytes()
    {
    }

    /**
     * Test case for uploadMultipartForm
     *
     * Upload an attachment for sending using a Multipart Form request. Returns an array whose first element is the ID of the uploaded attachment..
     *
     */
    public function testUploadMultipartForm()
    {
    }
}
