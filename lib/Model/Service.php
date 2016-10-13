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
        'type' => 'string',
        'statutoryDescriptionId' => 'string',
        'serviceClasses' => '\KuntaAPI\Model\OntologyItem[]',
        'ontologyTerms' => '\KuntaAPI\Model\OntologyItem[]',
        'targetGroups' => '\KuntaAPI\Model\OntologyItem[]',
        'lifeEvents' => '\KuntaAPI\Model\OntologyItem[]',
        'industrialClasses' => '\KuntaAPI\Model\OntologyItem[]',
        'names' => '\KuntaAPI\Model\LocalizedValue[]',
        'descriptions' => '\KuntaAPI\Model\LocalizedValue[]',
        'languages' => 'string[]',
        'keywords' => 'string[]',
        'coverageType' => 'string',
        'municipalities' => 'string[]',
        'webPages' => '\KuntaAPI\Model\WebPage[]',
        'requirements' => '\KuntaAPI\Model\LocalizedValue[]',
        'publishingStatus' => 'string',
        'chargeType' => 'string',
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
        'id' => 'id',
        'type' => 'type',
        'statutoryDescriptionId' => 'statutoryDescriptionId',
        'serviceClasses' => 'serviceClasses',
        'ontologyTerms' => 'ontologyTerms',
        'targetGroups' => 'targetGroups',
        'lifeEvents' => 'lifeEvents',
        'industrialClasses' => 'industrialClasses',
        'names' => 'names',
        'descriptions' => 'descriptions',
        'languages' => 'languages',
        'keywords' => 'keywords',
        'coverageType' => 'coverageType',
        'municipalities' => 'municipalities',
        'webPages' => 'webPages',
        'requirements' => 'requirements',
        'publishingStatus' => 'publishingStatus',
        'chargeType' => 'chargeType',
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
        'id' => 'setId',
        'type' => 'setType',
        'statutoryDescriptionId' => 'setStatutoryDescriptionId',
        'serviceClasses' => 'setServiceClasses',
        'ontologyTerms' => 'setOntologyTerms',
        'targetGroups' => 'setTargetGroups',
        'lifeEvents' => 'setLifeEvents',
        'industrialClasses' => 'setIndustrialClasses',
        'names' => 'setNames',
        'descriptions' => 'setDescriptions',
        'languages' => 'setLanguages',
        'keywords' => 'setKeywords',
        'coverageType' => 'setCoverageType',
        'municipalities' => 'setMunicipalities',
        'webPages' => 'setWebPages',
        'requirements' => 'setRequirements',
        'publishingStatus' => 'setPublishingStatus',
        'chargeType' => 'setChargeType',
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
        'id' => 'getId',
        'type' => 'getType',
        'statutoryDescriptionId' => 'getStatutoryDescriptionId',
        'serviceClasses' => 'getServiceClasses',
        'ontologyTerms' => 'getOntologyTerms',
        'targetGroups' => 'getTargetGroups',
        'lifeEvents' => 'getLifeEvents',
        'industrialClasses' => 'getIndustrialClasses',
        'names' => 'getNames',
        'descriptions' => 'getDescriptions',
        'languages' => 'getLanguages',
        'keywords' => 'getKeywords',
        'coverageType' => 'getCoverageType',
        'municipalities' => 'getMunicipalities',
        'webPages' => 'getWebPages',
        'requirements' => 'getRequirements',
        'publishingStatus' => 'getPublishingStatus',
        'chargeType' => 'getChargeType',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['statutoryDescriptionId'] = isset($data['statutoryDescriptionId']) ? $data['statutoryDescriptionId'] : null;
        $this->container['serviceClasses'] = isset($data['serviceClasses']) ? $data['serviceClasses'] : null;
        $this->container['ontologyTerms'] = isset($data['ontologyTerms']) ? $data['ontologyTerms'] : null;
        $this->container['targetGroups'] = isset($data['targetGroups']) ? $data['targetGroups'] : null;
        $this->container['lifeEvents'] = isset($data['lifeEvents']) ? $data['lifeEvents'] : null;
        $this->container['industrialClasses'] = isset($data['industrialClasses']) ? $data['industrialClasses'] : null;
        $this->container['names'] = isset($data['names']) ? $data['names'] : null;
        $this->container['descriptions'] = isset($data['descriptions']) ? $data['descriptions'] : null;
        $this->container['languages'] = isset($data['languages']) ? $data['languages'] : null;
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
        $this->container['coverageType'] = isset($data['coverageType']) ? $data['coverageType'] : null;
        $this->container['municipalities'] = isset($data['municipalities']) ? $data['municipalities'] : null;
        $this->container['webPages'] = isset($data['webPages']) ? $data['webPages'] : null;
        $this->container['requirements'] = isset($data['requirements']) ? $data['requirements'] : null;
        $this->container['publishingStatus'] = isset($data['publishingStatus']) ? $data['publishingStatus'] : null;
        $this->container['chargeType'] = isset($data['chargeType']) ? $data['chargeType'] : null;
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
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * Gets statutoryDescriptionId
     * @return string
     */
    public function getStatutoryDescriptionId()
    {
        return $this->container['statutoryDescriptionId'];
    }

    /**
     * Sets statutoryDescriptionId
     * @param string $statutoryDescriptionId
     * @return $this
     */
    public function setStatutoryDescriptionId($statutoryDescriptionId)
    {
        $this->container['statutoryDescriptionId'] = $statutoryDescriptionId;

        return $this;
    }

    /**
     * Gets serviceClasses
     * @return \KuntaAPI\Model\OntologyItem[]
     */
    public function getServiceClasses()
    {
        return $this->container['serviceClasses'];
    }

    /**
     * Sets serviceClasses
     * @param \KuntaAPI\Model\OntologyItem[] $serviceClasses
     * @return $this
     */
    public function setServiceClasses($serviceClasses)
    {
        $this->container['serviceClasses'] = $serviceClasses;

        return $this;
    }

    /**
     * Gets ontologyTerms
     * @return \KuntaAPI\Model\OntologyItem[]
     */
    public function getOntologyTerms()
    {
        return $this->container['ontologyTerms'];
    }

    /**
     * Sets ontologyTerms
     * @param \KuntaAPI\Model\OntologyItem[] $ontologyTerms
     * @return $this
     */
    public function setOntologyTerms($ontologyTerms)
    {
        $this->container['ontologyTerms'] = $ontologyTerms;

        return $this;
    }

    /**
     * Gets targetGroups
     * @return \KuntaAPI\Model\OntologyItem[]
     */
    public function getTargetGroups()
    {
        return $this->container['targetGroups'];
    }

    /**
     * Sets targetGroups
     * @param \KuntaAPI\Model\OntologyItem[] $targetGroups
     * @return $this
     */
    public function setTargetGroups($targetGroups)
    {
        $this->container['targetGroups'] = $targetGroups;

        return $this;
    }

    /**
     * Gets lifeEvents
     * @return \KuntaAPI\Model\OntologyItem[]
     */
    public function getLifeEvents()
    {
        return $this->container['lifeEvents'];
    }

    /**
     * Sets lifeEvents
     * @param \KuntaAPI\Model\OntologyItem[] $lifeEvents
     * @return $this
     */
    public function setLifeEvents($lifeEvents)
    {
        $this->container['lifeEvents'] = $lifeEvents;

        return $this;
    }

    /**
     * Gets industrialClasses
     * @return \KuntaAPI\Model\OntologyItem[]
     */
    public function getIndustrialClasses()
    {
        return $this->container['industrialClasses'];
    }

    /**
     * Sets industrialClasses
     * @param \KuntaAPI\Model\OntologyItem[] $industrialClasses
     * @return $this
     */
    public function setIndustrialClasses($industrialClasses)
    {
        $this->container['industrialClasses'] = $industrialClasses;

        return $this;
    }

    /**
     * Gets names
     * @return \KuntaAPI\Model\LocalizedValue[]
     */
    public function getNames()
    {
        return $this->container['names'];
    }

    /**
     * Sets names
     * @param \KuntaAPI\Model\LocalizedValue[] $names
     * @return $this
     */
    public function setNames($names)
    {
        $this->container['names'] = $names;

        return $this;
    }

    /**
     * Gets descriptions
     * @return \KuntaAPI\Model\LocalizedValue[]
     */
    public function getDescriptions()
    {
        return $this->container['descriptions'];
    }

    /**
     * Sets descriptions
     * @param \KuntaAPI\Model\LocalizedValue[] $descriptions
     * @return $this
     */
    public function setDescriptions($descriptions)
    {
        $this->container['descriptions'] = $descriptions;

        return $this;
    }

    /**
     * Gets languages
     * @return string[]
     */
    public function getLanguages()
    {
        return $this->container['languages'];
    }

    /**
     * Sets languages
     * @param string[] $languages
     * @return $this
     */
    public function setLanguages($languages)
    {
        $this->container['languages'] = $languages;

        return $this;
    }

    /**
     * Gets keywords
     * @return string[]
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     * @param string[] $keywords
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets coverageType
     * @return string
     */
    public function getCoverageType()
    {
        return $this->container['coverageType'];
    }

    /**
     * Sets coverageType
     * @param string $coverageType
     * @return $this
     */
    public function setCoverageType($coverageType)
    {
        $this->container['coverageType'] = $coverageType;

        return $this;
    }

    /**
     * Gets municipalities
     * @return string[]
     */
    public function getMunicipalities()
    {
        return $this->container['municipalities'];
    }

    /**
     * Sets municipalities
     * @param string[] $municipalities
     * @return $this
     */
    public function setMunicipalities($municipalities)
    {
        $this->container['municipalities'] = $municipalities;

        return $this;
    }

    /**
     * Gets webPages
     * @return \KuntaAPI\Model\WebPage[]
     */
    public function getWebPages()
    {
        return $this->container['webPages'];
    }

    /**
     * Sets webPages
     * @param \KuntaAPI\Model\WebPage[] $webPages
     * @return $this
     */
    public function setWebPages($webPages)
    {
        $this->container['webPages'] = $webPages;

        return $this;
    }

    /**
     * Gets requirements
     * @return \KuntaAPI\Model\LocalizedValue[]
     */
    public function getRequirements()
    {
        return $this->container['requirements'];
    }

    /**
     * Sets requirements
     * @param \KuntaAPI\Model\LocalizedValue[] $requirements
     * @return $this
     */
    public function setRequirements($requirements)
    {
        $this->container['requirements'] = $requirements;

        return $this;
    }

    /**
     * Gets publishingStatus
     * @return string
     */
    public function getPublishingStatus()
    {
        return $this->container['publishingStatus'];
    }

    /**
     * Sets publishingStatus
     * @param string $publishingStatus
     * @return $this
     */
    public function setPublishingStatus($publishingStatus)
    {
        $this->container['publishingStatus'] = $publishingStatus;

        return $this;
    }

    /**
     * Gets chargeType
     * @return string
     */
    public function getChargeType()
    {
        return $this->container['chargeType'];
    }

    /**
     * Sets chargeType
     * @param string $chargeType
     * @return $this
     */
    public function setChargeType($chargeType)
    {
        $this->container['chargeType'] = $chargeType;

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


