<?php
/**
 * GetInventoryItemResponse
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
 * GetInventoryItemResponse Class Doc Comment
 *
 * @category Class
 * @description This type is used by the response of the &lt;strong&gt;bulkGetInventoryItem&lt;/strong&gt; method to give the status of each inventory item record that the user tried to retrieve.
 * @package  Nopolabs\EBay\Sell\Inventory
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetInventoryItemResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetInventoryItemResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status_code' => 'int',
        'errors' => '\Nopolabs\EBay\Sell\Inventory\Model\Error[]',
        'warnings' => '\Nopolabs\EBay\Sell\Inventory\Model\Error[]',
        'sku' => 'string',
        'inventory_item' => '\Nopolabs\EBay\Sell\Inventory\Model\InventoryItemWithSkuLocaleGroupKeys'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'status_code' => null,
        'errors' => null,
        'warnings' => null,
        'sku' => null,
        'inventory_item' => null
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
        'status_code' => 'statusCode',
        'errors' => 'errors',
        'warnings' => 'warnings',
        'sku' => 'sku',
        'inventory_item' => 'inventoryItem'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status_code' => 'setStatusCode',
        'errors' => 'setErrors',
        'warnings' => 'setWarnings',
        'sku' => 'setSku',
        'inventory_item' => 'setInventoryItem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status_code' => 'getStatusCode',
        'errors' => 'getErrors',
        'warnings' => 'getWarnings',
        'sku' => 'getSku',
        'inventory_item' => 'getInventoryItem'
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
        $this->container['status_code'] = isset($data['status_code']) ? $data['status_code'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['warnings'] = isset($data['warnings']) ? $data['warnings'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['inventory_item'] = isset($data['inventory_item']) ? $data['inventory_item'] : null;
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
     * Gets status_code
     *
     * @return int
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code
     *
     * @param int $status_code The HTTP status code returned in this field indicates the success or failure of retrieving the inventory item record for the inventory item specified in the <strong>sku</strong> field. See the <strong>HTTP status codes</strong> table to see which each status code indicates.
     *
     * @return $this
     */
    public function setStatusCode($status_code)
    {
        $this->container['status_code'] = $status_code;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return \Nopolabs\EBay\Sell\Inventory\Model\Error[]
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \Nopolabs\EBay\Sell\Inventory\Model\Error[] $errors This container will be returned if there were one or more errors associated with retrieving the inventory item record.
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets warnings
     *
     * @return \Nopolabs\EBay\Sell\Inventory\Model\Error[]
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param \Nopolabs\EBay\Sell\Inventory\Model\Error[] $warnings This container will be returned if there were one or more warnings associated with retrieving the inventory item record.
     *
     * @return $this
     */
    public function setWarnings($warnings)
    {
        $this->container['warnings'] = $warnings;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The seller should have a unique SKU value for every product that they sell.
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets inventory_item
     *
     * @return \Nopolabs\EBay\Sell\Inventory\Model\InventoryItemWithSkuLocaleGroupKeys
     */
    public function getInventoryItem()
    {
        return $this->container['inventory_item'];
    }

    /**
     * Sets inventory_item
     *
     * @param \Nopolabs\EBay\Sell\Inventory\Model\InventoryItemWithSkuLocaleGroupKeys $inventory_item inventory_item
     *
     * @return $this
     */
    public function setInventoryItem($inventory_item)
    {
        $this->container['inventory_item'] = $inventory_item;

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


