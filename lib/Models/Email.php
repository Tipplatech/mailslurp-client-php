<?php
/**
 * Email
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
 * Do not edit the class manually.
 */

namespace MailSlurp\Models;

use \ArrayAccess;
use \MailSlurp\ObjectSerializer;

/**
 * Email Class Doc Comment
 *
 * @category Class
 * @description Email model (also referred to as EmailDto). Represents an email that was received by an inbox. If you want the original SMTP message see the &#x60;getRawEmail&#x60; endpoint.
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Email implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Email';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'analysis' => '\MailSlurp\Models\EmailAnalysis',
        'attachments' => 'string[]',
        'bcc' => 'string[]',
        'body' => 'string',
        'body_md5_hash' => 'string',
        'cc' => 'string[]',
        'charset' => 'string',
        'created_at' => '\DateTime',
        'from' => 'string',
        'headers' => 'map[string,string]',
        'id' => 'string',
        'inbox_id' => 'string',
        'is_html' => 'bool',
        'read' => 'bool',
        'reply_to' => 'string',
        'subject' => 'string',
        'to' => 'string[]',
        'updated_at' => '\DateTime',
        'user_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'analysis' => null,
        'attachments' => null,
        'bcc' => null,
        'body' => null,
        'body_md5_hash' => null,
        'cc' => null,
        'charset' => null,
        'created_at' => 'date-time',
        'from' => null,
        'headers' => null,
        'id' => 'uuid',
        'inbox_id' => 'uuid',
        'is_html' => null,
        'read' => null,
        'reply_to' => null,
        'subject' => null,
        'to' => null,
        'updated_at' => 'date-time',
        'user_id' => 'uuid'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'analysis' => 'analysis',
        'attachments' => 'attachments',
        'bcc' => 'bcc',
        'body' => 'body',
        'body_md5_hash' => 'bodyMD5Hash',
        'cc' => 'cc',
        'charset' => 'charset',
        'created_at' => 'createdAt',
        'from' => 'from',
        'headers' => 'headers',
        'id' => 'id',
        'inbox_id' => 'inboxId',
        'is_html' => 'isHTML',
        'read' => 'read',
        'reply_to' => 'replyTo',
        'subject' => 'subject',
        'to' => 'to',
        'updated_at' => 'updatedAt',
        'user_id' => 'userId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'analysis' => 'setAnalysis',
        'attachments' => 'setAttachments',
        'bcc' => 'setBcc',
        'body' => 'setBody',
        'body_md5_hash' => 'setBodyMd5Hash',
        'cc' => 'setCc',
        'charset' => 'setCharset',
        'created_at' => 'setCreatedAt',
        'from' => 'setFrom',
        'headers' => 'setHeaders',
        'id' => 'setId',
        'inbox_id' => 'setInboxId',
        'is_html' => 'setIsHtml',
        'read' => 'setRead',
        'reply_to' => 'setReplyTo',
        'subject' => 'setSubject',
        'to' => 'setTo',
        'updated_at' => 'setUpdatedAt',
        'user_id' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'analysis' => 'getAnalysis',
        'attachments' => 'getAttachments',
        'bcc' => 'getBcc',
        'body' => 'getBody',
        'body_md5_hash' => 'getBodyMd5Hash',
        'cc' => 'getCc',
        'charset' => 'getCharset',
        'created_at' => 'getCreatedAt',
        'from' => 'getFrom',
        'headers' => 'getHeaders',
        'id' => 'getId',
        'inbox_id' => 'getInboxId',
        'is_html' => 'getIsHtml',
        'read' => 'getRead',
        'reply_to' => 'getReplyTo',
        'subject' => 'getSubject',
        'to' => 'getTo',
        'updated_at' => 'getUpdatedAt',
        'user_id' => 'getUserId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['analysis'] = isset($data['analysis']) ? $data['analysis'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['bcc'] = isset($data['bcc']) ? $data['bcc'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['body_md5_hash'] = isset($data['body_md5_hash']) ? $data['body_md5_hash'] : null;
        $this->container['cc'] = isset($data['cc']) ? $data['cc'] : null;
        $this->container['charset'] = isset($data['charset']) ? $data['charset'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['headers'] = isset($data['headers']) ? $data['headers'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['inbox_id'] = isset($data['inbox_id']) ? $data['inbox_id'] : null;
        $this->container['is_html'] = isset($data['is_html']) ? $data['is_html'] : null;
        $this->container['read'] = isset($data['read']) ? $data['read'] : null;
        $this->container['reply_to'] = isset($data['reply_to']) ? $data['reply_to'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets analysis
     *
     * @return \MailSlurp\Models\EmailAnalysis|null
     */
    public function getAnalysis()
    {
        return $this->container['analysis'];
    }

    /**
     * Sets analysis
     *
     * @param \MailSlurp\Models\EmailAnalysis|null $analysis analysis
     *
     * @return $this
     */
    public function setAnalysis($analysis)
    {
        $this->container['analysis'] = $analysis;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return string[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param string[]|null $attachments List of IDs of attachments found in the email. Use these IDs with the Inbox and Email Controllers to download attachments and attachment meta data such as filesize, name, extension.
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets bcc
     *
     * @return string[]|null
     */
    public function getBcc()
    {
        return $this->container['bcc'];
    }

    /**
     * Sets bcc
     *
     * @param string[]|null $bcc List of `BCC` recipients email was addressed to
     *
     * @return $this
     */
    public function setBcc($bcc)
    {
        $this->container['bcc'] = $bcc;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string|null
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string|null $body The body of the email message
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets body_md5_hash
     *
     * @return string|null
     */
    public function getBodyMd5Hash()
    {
        return $this->container['body_md5_hash'];
    }

    /**
     * Sets body_md5_hash
     *
     * @param string|null $body_md5_hash A hash signature of the email message
     *
     * @return $this
     */
    public function setBodyMd5Hash($body_md5_hash)
    {
        $this->container['body_md5_hash'] = $body_md5_hash;

        return $this;
    }

    /**
     * Gets cc
     *
     * @return string[]|null
     */
    public function getCc()
    {
        return $this->container['cc'];
    }

    /**
     * Sets cc
     *
     * @param string[]|null $cc List of `CC` recipients email was addressed to
     *
     * @return $this
     */
    public function setCc($cc)
    {
        $this->container['cc'] = $cc;

        return $this;
    }

    /**
     * Gets charset
     *
     * @return string|null
     */
    public function getCharset()
    {
        return $this->container['charset'];
    }

    /**
     * Sets charset
     *
     * @param string|null $charset Detected character set of the email body such as UTF-8
     *
     * @return $this
     */
    public function setCharset($charset)
    {
        $this->container['charset'] = $charset;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at When was the email received by MailSlurp
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets from
     *
     * @return string|null
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string|null $from Who the email was sent from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets headers
     *
     * @return map[string,string]|null
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     *
     * @param map[string,string]|null $headers headers
     *
     * @return $this
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id ID of the email
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets inbox_id
     *
     * @return string|null
     */
    public function getInboxId()
    {
        return $this->container['inbox_id'];
    }

    /**
     * Sets inbox_id
     *
     * @param string|null $inbox_id ID of the inbox that received the email
     *
     * @return $this
     */
    public function setInboxId($inbox_id)
    {
        $this->container['inbox_id'] = $inbox_id;

        return $this;
    }

    /**
     * Gets is_html
     *
     * @return bool|null
     */
    public function getIsHtml()
    {
        return $this->container['is_html'];
    }

    /**
     * Sets is_html
     *
     * @param bool|null $is_html Was HTML sent in the email body
     *
     * @return $this
     */
    public function setIsHtml($is_html)
    {
        $this->container['is_html'] = $is_html;

        return $this;
    }

    /**
     * Gets read
     *
     * @return bool|null
     */
    public function getRead()
    {
        return $this->container['read'];
    }

    /**
     * Sets read
     *
     * @param bool|null $read Has the email been viewed ever
     *
     * @return $this
     */
    public function setRead($read)
    {
        $this->container['read'] = $read;

        return $this;
    }

    /**
     * Gets reply_to
     *
     * @return string|null
     */
    public function getReplyTo()
    {
        return $this->container['reply_to'];
    }

    /**
     * Sets reply_to
     *
     * @param string|null $reply_to The replyTo field on the received email
     *
     * @return $this
     */
    public function setReplyTo($reply_to)
    {
        $this->container['reply_to'] = $reply_to;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject The subject line of the email message
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets to
     *
     * @return string[]|null
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string[]|null $to List of `To` recipients email was addressed to
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at When was the email last updated
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id ID of user that email belongs
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


