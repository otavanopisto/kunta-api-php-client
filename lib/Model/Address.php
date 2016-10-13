<?php
/**
 * Address
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
 * Address Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     KuntaAPI
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Address implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'type' => 'string',
        'postOfficeBox' => 'string',
        'postalCode' => 'string',
        'postOffice' => 'string',
        'streetAddress' => '\KuntaAPI\Model\LocalizedValue[]',
        'municipality' => 'string',
        'country' => 'string',
        'qualifier' => 'string',
        'additionalInformations' => '\KuntaAPI\Model\LocalizedValue[]'
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
        'type' => 'type',
        'postOfficeBox' => 'postOfficeBox',
        'postalCode' => 'postalCode',
        'postOffice' => 'postOffice',
        'streetAddress' => 'streetAddress',
        'municipality' => 'municipality',
        'country' => 'country',
        'qualifier' => 'qualifier',
        'additionalInformations' => 'additionalInformations'
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
        'type' => 'setType',
        'postOfficeBox' => 'setPostOfficeBox',
        'postalCode' => 'setPostalCode',
        'postOffice' => 'setPostOffice',
        'streetAddress' => 'setStreetAddress',
        'municipality' => 'setMunicipality',
        'country' => 'setCountry',
        'qualifier' => 'setQualifier',
        'additionalInformations' => 'setAdditionalInformations'
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
        'type' => 'getType',
        'postOfficeBox' => 'getPostOfficeBox',
        'postalCode' => 'getPostalCode',
        'postOffice' => 'getPostOffice',
        'streetAddress' => 'getStreetAddress',
        'municipality' => 'getMunicipality',
        'country' => 'getCountry',
        'qualifier' => 'getQualifier',
        'additionalInformations' => 'getAdditionalInformations'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['postOfficeBox'] = isset($data['postOfficeBox']) ? $data['postOfficeBox'] : null;
        $this->container['postalCode'] = isset($data['postalCode']) ? $data['postalCode'] : null;
        $this->container['postOffice'] = isset($data['postOffice']) ? $data['postOffice'] : null;
        $this->container['streetAddress'] = isset($data['streetAddress']) ? $data['streetAddress'] : null;
        $this->container['municipality'] = isset($data['municipality']) ? $data['municipality'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['qualifier'] = isset($data['qualifier']) ? $data['qualifier'] : null;
        $this->container['additionalInformations'] = isset($data['additionalInformations']) ? $data['additionalInformations'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if (!is_null($this->container['postalCode']) && !preg_match("\\d{5}?", $this->container['postalCode'])) {
            $invalid_properties[] = "invalid value for 'postalCode', must be conform to the pattern \\d{5}?.";
        }

        if (!is_null($this->container['municipality']) && !preg_match("^[0-9]{3}$", $this->container['municipality'])) {
            $invalid_properties[] = "invalid value for 'municipality', must be conform to the pattern ^[0-9]{3}$.";
        }

        if (!is_null($this->container['country']) && !preg_match("^[A-Z]{2}$", $this->container['country'])) {
            $invalid_properties[] = "invalid value for 'country', must be conform to the pattern ^[A-Z]{2}$.";
        }

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
        if (!preg_match("\\d{5}?", $this->container['postalCode'])) {
            return false;
        }
        if (!preg_match("^[0-9]{3}$", $this->container['municipality'])) {
            return false;
        }
        if (!preg_match("^[A-Z]{2}$", $this->container['country'])) {
            return false;
        }
        return true;
    }


    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets postOfficeBox
     * @return string
     */
    public function getPostOfficeBox()
    {
        return $this->container['postOfficeBox'];
    }

    /**
     * Sets postOfficeBox
     * @param string $postOfficeBox
     * @return $this
     */
    public function setPostOfficeBox($postOfficeBox)
    {
        $this->container['postOfficeBox'] = $postOfficeBox;

        return $this;
    }

    /**
     * Gets postalCode
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     * @param string $postalCode
     * @return $this
     */
    public function setPostalCode($postalCode)
    {

        if (!preg_match("\\d{5}?", $postalCode)) {
            throw new \InvalidArgumentException('invalid value for $postalCode when calling Address., must be conform to the pattern \\d{5}?.');
        }
        $this->container['postalCode'] = $postalCode;

        return $this;
    }

    /**
     * Gets postOffice
     * @return string
     */
    public function getPostOffice()
    {
        return $this->container['postOffice'];
    }

    /**
     * Sets postOffice
     * @param string $postOffice
     * @return $this
     */
    public function setPostOffice($postOffice)
    {
        $this->container['postOffice'] = $postOffice;

        return $this;
    }

    /**
     * Gets streetAddress
     * @return \KuntaAPI\Model\LocalizedValue[]
     */
    public function getStreetAddress()
    {
        return $this->container['streetAddress'];
    }

    /**
     * Sets streetAddress
     * @param \KuntaAPI\Model\LocalizedValue[] $streetAddress
     * @return $this
     */
    public function setStreetAddress($streetAddress)
    {
        $this->container['streetAddress'] = $streetAddress;

        return $this;
    }

    /**
     * Gets municipality
     * @return string
     */
    public function getMunicipality()
    {
        return $this->container['municipality'];
    }

    /**
     * Sets municipality
     * @param string $municipality
     * @return $this
     */
    public function setMunicipality($municipality)
    {

        if (!preg_match("^[0-9]{3}$", $municipality)) {
            throw new \InvalidArgumentException('invalid value for $municipality when calling Address., must be conform to the pattern ^[0-9]{3}$.');
        }
        $this->container['municipality'] = $municipality;

        return $this;
    }

    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {

        if (!preg_match("^[A-Z]{2}$", $country)) {
            throw new \InvalidArgumentException('invalid value for $country when calling Address., must be conform to the pattern ^[A-Z]{2}$.');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets qualifier
     * @return string
     */
    public function getQualifier()
    {
        return $this->container['qualifier'];
    }

    /**
     * Sets qualifier
     * @param string $qualifier
     * @return $this
     */
    public function setQualifier($qualifier)
    {
        $this->container['qualifier'] = $qualifier;

        return $this;
    }

    /**
     * Gets additionalInformations
     * @return \KuntaAPI\Model\LocalizedValue[]
     */
    public function getAdditionalInformations()
    {
        return $this->container['additionalInformations'];
    }

    /**
     * Sets additionalInformations
     * @param \KuntaAPI\Model\LocalizedValue[] $additionalInformations
     * @return $this
     */
    public function setAdditionalInformations($additionalInformations)
    {
        $this->container['additionalInformations'] = $additionalInformations;

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

