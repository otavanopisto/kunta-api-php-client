<?php
/**
 * Service
 *
 * PHP version 5
 *
 * @category Class
 * @package  KuntaAPI
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kunta API
 *
 * One API to rule them all. One API to find them, One API to bring them all and in the darkness bind them.
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace KuntaAPI\Model;

use \ArrayAccess;

/**
 * Service Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     KuntaAPI
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Service implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Service';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'string',
        'description' => '\KuntaAPI\Model\LocalizedValue[]',
        'name' => '\KuntaAPI\Model\LocalizedValue[]',
        'source_ids' => 'string[]',
        'electronic_channel_ids' => 'string[]',
        'phone_channel_ids' => 'string[]',
        'printable_form_channel_ids' => 'string[]',
        'service_location_channel_ids' => 'string[]',
        'webpage_channel_ids' => 'string[]'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'id' => 'id',
        'description' => 'description',
        'name' => 'name',
        'source_ids' => 'source_ids',
        'electronic_channel_ids' => 'electronic_channel_ids',
        'phone_channel_ids' => 'phone_channel_ids',
        'printable_form_channel_ids' => 'printable_form_channel_ids',
        'service_location_channel_ids' => 'service_location_channel_ids',
        'webpage_channel_ids' => 'webpage_channel_ids'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'id' => 'setId',
        'description' => 'setDescription',
        'name' => 'setName',
        'source_ids' => 'setSourceIds',
        'electronic_channel_ids' => 'setElectronicChannelIds',
        'phone_channel_ids' => 'setPhoneChannelIds',
        'printable_form_channel_ids' => 'setPrintableFormChannelIds',
        'service_location_channel_ids' => 'setServiceLocationChannelIds',
        'webpage_channel_ids' => 'setWebpageChannelIds'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'id' => 'getId',
        'description' => 'getDescription',
        'name' => 'getName',
        'source_ids' => 'getSourceIds',
        'electronic_channel_ids' => 'getElectronicChannelIds',
        'phone_channel_ids' => 'getPhoneChannelIds',
        'printable_form_channel_ids' => 'getPrintableFormChannelIds',
        'service_location_channel_ids' => 'getServiceLocationChannelIds',
        'webpage_channel_ids' => 'getWebpageChannelIds'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['source_ids'] = isset($data['source_ids']) ? $data['source_ids'] : null;
        $this->container['electronic_channel_ids'] = isset($data['electronic_channel_ids']) ? $data['electronic_channel_ids'] : null;
        $this->container['phone_channel_ids'] = isset($data['phone_channel_ids']) ? $data['phone_channel_ids'] : null;
        $this->container['printable_form_channel_ids'] = isset($data['printable_form_channel_ids']) ? $data['printable_form_channel_ids'] : null;
        $this->container['service_location_channel_ids'] = isset($data['service_location_channel_ids']) ? $data['service_location_channel_ids'] : null;
        $this->container['webpage_channel_ids'] = isset($data['webpage_channel_ids']) ? $data['webpage_channel_ids'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id Unique identifier representing a specific service.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets description
     * @return \KuntaAPI\Model\LocalizedValue[]
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param \KuntaAPI\Model\LocalizedValue[] $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets name
     * @return \KuntaAPI\Model\LocalizedValue[]
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param \KuntaAPI\Model\LocalizedValue[] $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets source_ids
     * @return string[]
     */
    public function getSourceIds()
    {
        return $this->container['source_ids'];
    }

    /**
     * Sets source_ids
     * @param string[] $source_ids Name of the service.
     * @return $this
     */
    public function setSourceIds($source_ids)
    {
        $this->container['source_ids'] = $source_ids;

        return $this;
    }

    /**
     * Gets electronic_channel_ids
     * @return string[]
     */
    public function getElectronicChannelIds()
    {
        return $this->container['electronic_channel_ids'];
    }

    /**
     * Sets electronic_channel_ids
     * @param string[] $electronic_channel_ids
     * @return $this
     */
    public function setElectronicChannelIds($electronic_channel_ids)
    {
        $this->container['electronic_channel_ids'] = $electronic_channel_ids;

        return $this;
    }

    /**
     * Gets phone_channel_ids
     * @return string[]
     */
    public function getPhoneChannelIds()
    {
        return $this->container['phone_channel_ids'];
    }

    /**
     * Sets phone_channel_ids
     * @param string[] $phone_channel_ids
     * @return $this
     */
    public function setPhoneChannelIds($phone_channel_ids)
    {
        $this->container['phone_channel_ids'] = $phone_channel_ids;

        return $this;
    }

    /**
     * Gets printable_form_channel_ids
     * @return string[]
     */
    public function getPrintableFormChannelIds()
    {
        return $this->container['printable_form_channel_ids'];
    }

    /**
     * Sets printable_form_channel_ids
     * @param string[] $printable_form_channel_ids
     * @return $this
     */
    public function setPrintableFormChannelIds($printable_form_channel_ids)
    {
        $this->container['printable_form_channel_ids'] = $printable_form_channel_ids;

        return $this;
    }

    /**
     * Gets service_location_channel_ids
     * @return string[]
     */
    public function getServiceLocationChannelIds()
    {
        return $this->container['service_location_channel_ids'];
    }

    /**
     * Sets service_location_channel_ids
     * @param string[] $service_location_channel_ids
     * @return $this
     */
    public function setServiceLocationChannelIds($service_location_channel_ids)
    {
        $this->container['service_location_channel_ids'] = $service_location_channel_ids;

        return $this;
    }

    /**
     * Gets webpage_channel_ids
     * @return string[]
     */
    public function getWebpageChannelIds()
    {
        return $this->container['webpage_channel_ids'];
    }

    /**
     * Sets webpage_channel_ids
     * @param string[] $webpage_channel_ids
     * @return $this
     */
    public function setWebpageChannelIds($webpage_channel_ids)
    {
        $this->container['webpage_channel_ids'] = $webpage_channel_ids;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\KuntaAPI\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\KuntaAPI\ObjectSerializer::sanitizeForSerialization($this));
    }
}


