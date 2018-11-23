<?php
/**
 * TinRequestResultSharedModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  App\Libraries\TinCorrect
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TinCorrect.Api
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace App\Libraries\TinCorrect\Model;

use \ArrayAccess;
use \App\Libraries\TinCorrect\ObjectSerializer;

/**
 * TinRequestResultSharedModel Class Doc Comment
 *
 * @category Class
 * @package  App\Libraries\TinCorrect
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TinRequestResultSharedModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TinRequestResultSharedModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'request_id' => 'int',
        'tin' => 'string',
        'name' => 'string',
        'irs_result_id' => 'int',
        'result_description' => 'string',
        'result_category' => 'string',
        'request_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'request_id' => 'int32',
        'tin' => null,
        'name' => null,
        'irs_result_id' => 'int32',
        'result_description' => null,
        'result_category' => null,
        'request_date' => 'date-time'
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
        'request_id' => 'RequestId',
        'tin' => 'Tin',
        'name' => 'Name',
        'irs_result_id' => 'IrsResultId',
        'result_description' => 'ResultDescription',
        'result_category' => 'ResultCategory',
        'request_date' => 'RequestDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'request_id' => 'setRequestId',
        'tin' => 'setTin',
        'name' => 'setName',
        'irs_result_id' => 'setIrsResultId',
        'result_description' => 'setResultDescription',
        'result_category' => 'setResultCategory',
        'request_date' => 'setRequestDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'request_id' => 'getRequestId',
        'tin' => 'getTin',
        'name' => 'getName',
        'irs_result_id' => 'getIrsResultId',
        'result_description' => 'getResultDescription',
        'result_category' => 'getResultCategory',
        'request_date' => 'getRequestDate'
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
        $this->container['request_id'] = isset($data['request_id']) ? $data['request_id'] : null;
        $this->container['tin'] = isset($data['tin']) ? $data['tin'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['irs_result_id'] = isset($data['irs_result_id']) ? $data['irs_result_id'] : null;
        $this->container['result_description'] = isset($data['result_description']) ? $data['result_description'] : null;
        $this->container['result_category'] = isset($data['result_category']) ? $data['result_category'] : null;
        $this->container['request_date'] = isset($data['request_date']) ? $data['request_date'] : null;
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
     * Gets request_id
     *
     * @return int
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param int $request_id request_id
     *
     * @return $this
     */
    public function setRequestId($request_id)
    {
        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets tin
     *
     * @return string
     */
    public function getTin()
    {
        return $this->container['tin'];
    }

    /**
     * Sets tin
     *
     * @param string $tin tin
     *
     * @return $this
     */
    public function setTin($tin)
    {
        $this->container['tin'] = $tin;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets irs_result_id
     *
     * @return int
     */
    public function getIrsResultId()
    {
        return $this->container['irs_result_id'];
    }

    /**
     * Sets irs_result_id
     *
     * @param int $irs_result_id irs_result_id
     *
     * @return $this
     */
    public function setIrsResultId($irs_result_id)
    {
        $this->container['irs_result_id'] = $irs_result_id;

        return $this;
    }

    /**
     * Gets result_description
     *
     * @return string
     */
    public function getResultDescription()
    {
        return $this->container['result_description'];
    }

    /**
     * Sets result_description
     *
     * @param string $result_description result_description
     *
     * @return $this
     */
    public function setResultDescription($result_description)
    {
        $this->container['result_description'] = $result_description;

        return $this;
    }

    /**
     * Gets result_category
     *
     * @return string
     */
    public function getResultCategory()
    {
        return $this->container['result_category'];
    }

    /**
     * Sets result_category
     *
     * @param string $result_category result_category
     *
     * @return $this
     */
    public function setResultCategory($result_category)
    {
        $this->container['result_category'] = $result_category;

        return $this;
    }

    /**
     * Gets request_date
     *
     * @return \DateTime
     */
    public function getRequestDate()
    {
        return $this->container['request_date'];
    }

    /**
     * Sets request_date
     *
     * @param \DateTime $request_date request_date
     *
     * @return $this
     */
    public function setRequestDate($request_date)
    {
        $this->container['request_date'] = $request_date;

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


