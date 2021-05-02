<?php
/**
 * WebhookPayloadTest
 *
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
 * MailSlurp is an API for sending and receiving emails from dynamically allocated email addresses. It's designed for developers and QA teams to test applications, process inbound emails, send templated notifications, attachments, and more.   ## Resources - [Homepage](https://www.mailslurp.com) - Get an [API KEY](https://app.mailslurp.com/sign-up/) - Generated [SDK Clients](https://www.mailslurp.com/docs/) - [Examples](https://github.com/mailslurp/examples) repository
 *
 * The version of the OpenAPI document: 6.5.2
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace MailSlurp;

use PHPUnit\Framework\TestCase;

/**
 * WebhookPayloadTest Class Doc Comment
 *
 * @category    Class
 * @description MailSlurp webhook payload schema. This schema describes the JSON object that is sent via HTTP POST to webhook urls when an email is received by an inbox that a webhook is attached to. Payloads may be delivered multiple times so use the ID as a key for event uniqueness. The payload contains IDs for the email and inbox affected. Use these to fetch more data related to the event using appropriate inbox and email endpoints. See https://www.mailslurp.com/guides/email-webhooks/ for more information. Your webhook endpoint should accept POST HTTP request and return a 200 in under 30 seconds. Process the webhook asynchronously if you need to.
 * @package     MailSlurp
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class WebhookPayloadTest extends TestCase
{

    /**
     * Setup before running any test case
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
     * Test "WebhookPayload"
     */
    public function testWebhookPayload()
    {
    }

    /**
     * Test attribute "attachment_meta_datas"
     */
    public function testPropertyAttachmentMetaDatas()
    {
    }

    /**
     * Test attribute "bcc"
     */
    public function testPropertyBcc()
    {
    }

    /**
     * Test attribute "cc"
     */
    public function testPropertyCc()
    {
    }

    /**
     * Test attribute "created_at"
     */
    public function testPropertyCreatedAt()
    {
    }

    /**
     * Test attribute "email_id"
     */
    public function testPropertyEmailId()
    {
    }

    /**
     * Test attribute "event_name"
     */
    public function testPropertyEventName()
    {
    }

    /**
     * Test attribute "from"
     */
    public function testPropertyFrom()
    {
    }

    /**
     * Test attribute "inbox_id"
     */
    public function testPropertyInboxId()
    {
    }

    /**
     * Test attribute "message_id"
     */
    public function testPropertyMessageId()
    {
    }

    /**
     * Test attribute "subject"
     */
    public function testPropertySubject()
    {
    }

    /**
     * Test attribute "to"
     */
    public function testPropertyTo()
    {
    }

    /**
     * Test attribute "webhook_id"
     */
    public function testPropertyWebhookId()
    {
    }

    /**
     * Test attribute "webhook_name"
     */
    public function testPropertyWebhookName()
    {
    }
}
