<?php
/**
 * WebhookResultDto
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
 * Do not edit the class manually.
 */

namespace MailSlurp\Models;

use \ArrayAccess;
use \MailSlurp\ObjectSerializer;

/**
 * WebhookResultDto Class Doc Comment
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WebhookResultDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebhookResultDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'created_at' => '\DateTime',
        'http_method' => 'string',
        'id' => 'string',
        'inbox_id' => 'string',
        'message_id' => 'string',
        'redrive_id' => 'string',
        'response_body_extract' => 'string',
        'response_status' => 'int',
        'response_time_millis' => 'int',
        'result_type' => 'string',
        'updated_at' => '\DateTime',
        'user_id' => 'string',
        'webhook_event' => 'string',
        'webhook_id' => 'string',
        'webhook_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'created_at' => 'date-time',
        'http_method' => null,
        'id' => 'uuid',
        'inbox_id' => 'uuid',
        'message_id' => null,
        'redrive_id' => 'uuid',
        'response_body_extract' => null,
        'response_status' => 'int32',
        'response_time_millis' => 'int64',
        'result_type' => null,
        'updated_at' => 'date-time',
        'user_id' => 'uuid',
        'webhook_event' => null,
        'webhook_id' => 'uuid',
        'webhook_url' => null
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
        'created_at' => 'createdAt',
        'http_method' => 'httpMethod',
        'id' => 'id',
        'inbox_id' => 'inboxId',
        'message_id' => 'messageId',
        'redrive_id' => 'redriveId',
        'response_body_extract' => 'responseBodyExtract',
        'response_status' => 'responseStatus',
        'response_time_millis' => 'responseTimeMillis',
        'result_type' => 'resultType',
        'updated_at' => 'updatedAt',
        'user_id' => 'userId',
        'webhook_event' => 'webhookEvent',
        'webhook_id' => 'webhookId',
        'webhook_url' => 'webhookUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_at' => 'setCreatedAt',
        'http_method' => 'setHttpMethod',
        'id' => 'setId',
        'inbox_id' => 'setInboxId',
        'message_id' => 'setMessageId',
        'redrive_id' => 'setRedriveId',
        'response_body_extract' => 'setResponseBodyExtract',
        'response_status' => 'setResponseStatus',
        'response_time_millis' => 'setResponseTimeMillis',
        'result_type' => 'setResultType',
        'updated_at' => 'setUpdatedAt',
        'user_id' => 'setUserId',
        'webhook_event' => 'setWebhookEvent',
        'webhook_id' => 'setWebhookId',
        'webhook_url' => 'setWebhookUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_at' => 'getCreatedAt',
        'http_method' => 'getHttpMethod',
        'id' => 'getId',
        'inbox_id' => 'getInboxId',
        'message_id' => 'getMessageId',
        'redrive_id' => 'getRedriveId',
        'response_body_extract' => 'getResponseBodyExtract',
        'response_status' => 'getResponseStatus',
        'response_time_millis' => 'getResponseTimeMillis',
        'result_type' => 'getResultType',
        'updated_at' => 'getUpdatedAt',
        'user_id' => 'getUserId',
        'webhook_event' => 'getWebhookEvent',
        'webhook_id' => 'getWebhookId',
        'webhook_url' => 'getWebhookUrl'
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

    const HTTP_METHOD_GET = 'GET';
    const HTTP_METHOD_HEAD = 'HEAD';
    const HTTP_METHOD_POST = 'POST';
    const HTTP_METHOD_PUT = 'PUT';
    const HTTP_METHOD_PATCH = 'PATCH';
    const HTTP_METHOD_DELETE = 'DELETE';
    const HTTP_METHOD_OPTIONS = 'OPTIONS';
    const HTTP_METHOD_TRACE = 'TRACE';
    const RESULT_TYPE_BAD_RESPONSE = 'BAD_RESPONSE';
    const RESULT_TYPE_EXCEPTION = 'EXCEPTION';
    const RESULT_TYPE_SUCCESS = 'SUCCESS';
    const WEBHOOK_EVENT_EMAIL_RECEIVED = 'EMAIL_RECEIVED';
    const WEBHOOK_EVENT_NEW_EMAIL = 'NEW_EMAIL';
    const WEBHOOK_EVENT_NEW_CONTACT = 'NEW_CONTACT';
    const WEBHOOK_EVENT_NEW_ATTACHMENT = 'NEW_ATTACHMENT';
    const WEBHOOK_EVENT_EMAIL_OPENED = 'EMAIL_OPENED';
    const WEBHOOK_EVENT_EMAIL_READ = 'EMAIL_READ';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHttpMethodAllowableValues()
    {
        return [
            self::HTTP_METHOD_GET,
            self::HTTP_METHOD_HEAD,
            self::HTTP_METHOD_POST,
            self::HTTP_METHOD_PUT,
            self::HTTP_METHOD_PATCH,
            self::HTTP_METHOD_DELETE,
            self::HTTP_METHOD_OPTIONS,
            self::HTTP_METHOD_TRACE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResultTypeAllowableValues()
    {
        return [
            self::RESULT_TYPE_BAD_RESPONSE,
            self::RESULT_TYPE_EXCEPTION,
            self::RESULT_TYPE_SUCCESS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWebhookEventAllowableValues()
    {
        return [
            self::WEBHOOK_EVENT_EMAIL_RECEIVED,
            self::WEBHOOK_EVENT_NEW_EMAIL,
            self::WEBHOOK_EVENT_NEW_CONTACT,
            self::WEBHOOK_EVENT_NEW_ATTACHMENT,
            self::WEBHOOK_EVENT_EMAIL_OPENED,
            self::WEBHOOK_EVENT_EMAIL_READ,
        ];
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
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['http_method'] = isset($data['http_method']) ? $data['http_method'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['inbox_id'] = isset($data['inbox_id']) ? $data['inbox_id'] : null;
        $this->container['message_id'] = isset($data['message_id']) ? $data['message_id'] : null;
        $this->container['redrive_id'] = isset($data['redrive_id']) ? $data['redrive_id'] : null;
        $this->container['response_body_extract'] = isset($data['response_body_extract']) ? $data['response_body_extract'] : null;
        $this->container['response_status'] = isset($data['response_status']) ? $data['response_status'] : null;
        $this->container['response_time_millis'] = isset($data['response_time_millis']) ? $data['response_time_millis'] : null;
        $this->container['result_type'] = isset($data['result_type']) ? $data['result_type'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['webhook_event'] = isset($data['webhook_event']) ? $data['webhook_event'] : null;
        $this->container['webhook_id'] = isset($data['webhook_id']) ? $data['webhook_id'] : null;
        $this->container['webhook_url'] = isset($data['webhook_url']) ? $data['webhook_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['http_method'] === null) {
            $invalidProperties[] = "'http_method' can't be null";
        }
        $allowedValues = $this->getHttpMethodAllowableValues();
        if (!is_null($this->container['http_method']) && !in_array($this->container['http_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'http_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['inbox_id'] === null) {
            $invalidProperties[] = "'inbox_id' can't be null";
        }
        if ($this->container['message_id'] === null) {
            $invalidProperties[] = "'message_id' can't be null";
        }
        if ($this->container['response_time_millis'] === null) {
            $invalidProperties[] = "'response_time_millis' can't be null";
        }
        $allowedValues = $this->getResultTypeAllowableValues();
        if (!is_null($this->container['result_type']) && !in_array($this->container['result_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'result_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
        }
        if ($this->container['webhook_event'] === null) {
            $invalidProperties[] = "'webhook_event' can't be null";
        }
        $allowedValues = $this->getWebhookEventAllowableValues();
        if (!is_null($this->container['webhook_event']) && !in_array($this->container['webhook_event'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'webhook_event', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['webhook_id'] === null) {
            $invalidProperties[] = "'webhook_id' can't be null";
        }
        if ($this->container['webhook_url'] === null) {
            $invalidProperties[] = "'webhook_url' can't be null";
        }
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
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets http_method
     *
     * @return string
     */
    public function getHttpMethod()
    {
        return $this->container['http_method'];
    }

    /**
     * Sets http_method
     *
     * @param string $http_method http_method
     *
     * @return $this
     */
    public function setHttpMethod($http_method)
    {
        $allowedValues = $this->getHttpMethodAllowableValues();
        if (!in_array($http_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'http_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['http_method'] = $http_method;

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
     * @param string|null $id id
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
     * @return string
     */
    public function getInboxId()
    {
        return $this->container['inbox_id'];
    }

    /**
     * Sets inbox_id
     *
     * @param string $inbox_id inbox_id
     *
     * @return $this
     */
    public function setInboxId($inbox_id)
    {
        $this->container['inbox_id'] = $inbox_id;

        return $this;
    }

    /**
     * Gets message_id
     *
     * @return string
     */
    public function getMessageId()
    {
        return $this->container['message_id'];
    }

    /**
     * Sets message_id
     *
     * @param string $message_id message_id
     *
     * @return $this
     */
    public function setMessageId($message_id)
    {
        $this->container['message_id'] = $message_id;

        return $this;
    }

    /**
     * Gets redrive_id
     *
     * @return string|null
     */
    public function getRedriveId()
    {
        return $this->container['redrive_id'];
    }

    /**
     * Sets redrive_id
     *
     * @param string|null $redrive_id redrive_id
     *
     * @return $this
     */
    public function setRedriveId($redrive_id)
    {
        $this->container['redrive_id'] = $redrive_id;

        return $this;
    }

    /**
     * Gets response_body_extract
     *
     * @return string|null
     */
    public function getResponseBodyExtract()
    {
        return $this->container['response_body_extract'];
    }

    /**
     * Sets response_body_extract
     *
     * @param string|null $response_body_extract response_body_extract
     *
     * @return $this
     */
    public function setResponseBodyExtract($response_body_extract)
    {
        $this->container['response_body_extract'] = $response_body_extract;

        return $this;
    }

    /**
     * Gets response_status
     *
     * @return int|null
     */
    public function getResponseStatus()
    {
        return $this->container['response_status'];
    }

    /**
     * Sets response_status
     *
     * @param int|null $response_status response_status
     *
     * @return $this
     */
    public function setResponseStatus($response_status)
    {
        $this->container['response_status'] = $response_status;

        return $this;
    }

    /**
     * Gets response_time_millis
     *
     * @return int
     */
    public function getResponseTimeMillis()
    {
        return $this->container['response_time_millis'];
    }

    /**
     * Sets response_time_millis
     *
     * @param int $response_time_millis response_time_millis
     *
     * @return $this
     */
    public function setResponseTimeMillis($response_time_millis)
    {
        $this->container['response_time_millis'] = $response_time_millis;

        return $this;
    }

    /**
     * Gets result_type
     *
     * @return string|null
     */
    public function getResultType()
    {
        return $this->container['result_type'];
    }

    /**
     * Sets result_type
     *
     * @param string|null $result_type result_type
     *
     * @return $this
     */
    public function setResultType($result_type)
    {
        $allowedValues = $this->getResultTypeAllowableValues();
        if (!is_null($result_type) && !in_array($result_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'result_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['result_type'] = $result_type;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
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
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets webhook_event
     *
     * @return string
     */
    public function getWebhookEvent()
    {
        return $this->container['webhook_event'];
    }

    /**
     * Sets webhook_event
     *
     * @param string $webhook_event webhook_event
     *
     * @return $this
     */
    public function setWebhookEvent($webhook_event)
    {
        $allowedValues = $this->getWebhookEventAllowableValues();
        if (!in_array($webhook_event, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'webhook_event', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['webhook_event'] = $webhook_event;

        return $this;
    }

    /**
     * Gets webhook_id
     *
     * @return string
     */
    public function getWebhookId()
    {
        return $this->container['webhook_id'];
    }

    /**
     * Sets webhook_id
     *
     * @param string $webhook_id webhook_id
     *
     * @return $this
     */
    public function setWebhookId($webhook_id)
    {
        $this->container['webhook_id'] = $webhook_id;

        return $this;
    }

    /**
     * Gets webhook_url
     *
     * @return string
     */
    public function getWebhookUrl()
    {
        return $this->container['webhook_url'];
    }

    /**
     * Sets webhook_url
     *
     * @param string $webhook_url webhook_url
     *
     * @return $this
     */
    public function setWebhookUrl($webhook_url)
    {
        $this->container['webhook_url'] = $webhook_url;

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


