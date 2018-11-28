<?php
/**
 * Error
 *
 * PHP version 5
 *
 * @category Class
 * @package  Nopolabs\EBay\Sell\Inventory
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Inventory API
 *
 * The Inventory API is used to create and manage inventory, and then to publish and manage this inventory on an eBay marketplace. There is also a call in this API that will convert eligible, active eBay listings into the Inventory API model.
 *
 * OpenAPI spec version: v1.6.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Nopolabs\EBay\Sell\Inventory\Model;

use \ArrayAccess;
use \Nopolabs\EBay\Sell\Inventory\ObjectSerializer;

/**
 * Error Class Doc Comment
 *
 * @category Class
 * @description This type is used to express detailed information on errors and warnings that may occur with a call request.
 * @package  Nopolabs\EBay\Sell\Inventory
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Error implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Error';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'error_id' => 'int',
        'domain' => 'string',
        'subdomain' => 'string',
        'category' => 'string',
        'message' => 'string',
        'parameters' => '\Nopolabs\EBay\Sell\Inventory\Model\ErrorParameter[]',
        'long_message' => 'string',
        'input_ref_ids' => 'string[]',
        'output_ref_ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'error_id' => null,
        'domain' => null,
        'subdomain' => null,
        'category' => null,
        'message' => null,
        'parameters' => null,
        'long_message' => null,
        'input_ref_ids' => null,
        'output_ref_ids' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'error_id' => 'errorId',
        'domain' => 'domain',
        'subdomain' => 'subdomain',
        'category' => 'category',
        'message' => 'message',
        'parameters' => 'parameters',
        'long_message' => 'longMessage',
        'input_ref_ids' => 'inputRefIds',
        'output_ref_ids' => 'outputRefIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error_id' => 'setErrorId',
        'domain' => 'setDomain',
        'subdomain' => 'setSubdomain',
        'category' => 'setCategory',
        'message' => 'setMessage',
        'parameters' => 'setParameters',
        'long_message' => 'setLongMessage',
        'input_ref_ids' => 'setInputRefIds',
        'output_ref_ids' => 'setOutputRefIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error_id' => 'getErrorId',
        'domain' => 'getDomain',
        'subdomain' => 'getSubdomain',
        'category' => 'getCategory',
        'message' => 'getMessage',
        'parameters' => 'getParameters',
        'long_message' => 'getLongMessage',
        'input_ref_ids' => 'getInputRefIds',
        'output_ref_ids' => 'getOutputRefIds'
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
        return self::$swaggerModelName;
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
        $this->container['error_id'] = isset($data['error_id']) ? $data['error_id'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['subdomain'] = isset($data['subdomain']) ? $data['subdomain'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['long_message'] = isset($data['long_message']) ? $data['long_message'] : null;
        $this->container['input_ref_ids'] = isset($data['input_ref_ids']) ? $data['input_ref_ids'] : null;
        $this->container['output_ref_ids'] = isset($data['output_ref_ids']) ? $data['output_ref_ids'] : null;
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

        return true;
    }


    /**
     * Gets error_id
     *
     * @return int
     */
    public function getErrorId()
    {
        return $this->container['error_id'];
    }

    /**
     * Sets error_id
     *
     * @param int $error_id A unique code that identifies the particular error or warning that occurred. Your application can use error codes as identifiers in your customized error-handling algorithms.
     *
     * @return $this
     */
    public function setErrorId($error_id)
    {
        $this->container['error_id'] = $error_id;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string $domain The name of the domain in which the error or warning occurred.
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets subdomain
     *
     * @return string
     */
    public function getSubdomain()
    {
        return $this->container['subdomain'];
    }

    /**
     * Sets subdomain
     *
     * @param string $subdomain The name of the subdomain in which the error or warning occurred.
     *
     * @return $this
     */
    public function setSubdomain($subdomain)
    {
        $this->container['subdomain'] = $subdomain;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category This string value indicates the error category. There are three categories of errors: request errors, application errors, and system errors.
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message A description of the condition that caused the error or warning.
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return \Nopolabs\EBay\Sell\Inventory\Model\ErrorParameter[]
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param \Nopolabs\EBay\Sell\Inventory\Model\ErrorParameter[] $parameters Various warning and error messages return one or more variables that contain contextual information about the error or waring. This is often the field or value that triggered the error or warning.
     *
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets long_message
     *
     * @return string
     */
    public function getLongMessage()
    {
        return $this->container['long_message'];
    }

    /**
     * Sets long_message
     *
     * @param string $long_message A detailed description of the condition that caused the error or warning, and information on what to do to correct the problem.
     *
     * @return $this
     */
    public function setLongMessage($long_message)
    {
        $this->container['long_message'] = $long_message;

        return $this;
    }

    /**
     * Gets input_ref_ids
     *
     * @return string[]
     */
    public function getInputRefIds()
    {
        return $this->container['input_ref_ids'];
    }

    /**
     * Sets input_ref_ids
     *
     * @param string[] $input_ref_ids An array of one or more reference IDs which identify the specific request element(s) most closely associated to the error or warning, if any.
     *
     * @return $this
     */
    public function setInputRefIds($input_ref_ids)
    {
        $this->container['input_ref_ids'] = $input_ref_ids;

        return $this;
    }

    /**
     * Gets output_ref_ids
     *
     * @return string[]
     */
    public function getOutputRefIds()
    {
        return $this->container['output_ref_ids'];
    }

    /**
     * Sets output_ref_ids
     *
     * @param string[] $output_ref_ids An array of one or more reference IDs which identify the specific response element(s) most closely associated to the error or warning, if any.
     *
     * @return $this
     */
    public function setOutputRefIds($output_ref_ids)
    {
        $this->container['output_ref_ids'] = $output_ref_ids;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

