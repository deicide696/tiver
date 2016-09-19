<?php
/**
 * DaviPlataChargeback
 *
 * PHP version 5
 *
 * @category Class
 * @package  Tpaga
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Tpaga\Model;

use \ArrayAccess;
/**
 * DaviPlataChargeback Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Tpaga
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DaviPlataChargeback implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'davi_plata_charge' => 'string',
        'davi_plata' => 'string',
        'reimbursed' => 'bool'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'davi_plata_charge' => 'daviPlataCharge',
        'davi_plata' => 'daviPlata',
        'reimbursed' => 'reimbursed'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'davi_plata_charge' => 'setDaviPlataCharge',
        'davi_plata' => 'setDaviPlata',
        'reimbursed' => 'setReimbursed'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'davi_plata_charge' => 'getDaviPlataCharge',
        'davi_plata' => 'getDaviPlata',
        'reimbursed' => 'getReimbursed'
    );
  
    
    /**
      * $id 
      * @var string
      */
    protected $id;
    
    /**
      * $davi_plata_charge 
      * @var string
      */
    protected $davi_plata_charge;
    
    /**
      * $davi_plata 
      * @var string
      */
    protected $davi_plata;
    
    /**
      * $reimbursed 
      * @var bool
      */
    protected $reimbursed;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->id = $data["id"];
            $this->davi_plata_charge = $data["davi_plata_charge"];
            $this->davi_plata = $data["davi_plata"];
            $this->reimbursed = $data["reimbursed"];
        }
    }
    
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id 
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets davi_plata_charge
     * @return string
     */
    public function getDaviPlataCharge()
    {
        return $this->davi_plata_charge;
    }
  
    /**
     * Sets davi_plata_charge
     * @param string $davi_plata_charge 
     * @return $this
     */
    public function setDaviPlataCharge($davi_plata_charge)
    {
        
        $this->davi_plata_charge = $davi_plata_charge;
        return $this;
    }
    
    /**
     * Gets davi_plata
     * @return string
     */
    public function getDaviPlata()
    {
        return $this->davi_plata;
    }
  
    /**
     * Sets davi_plata
     * @param string $davi_plata 
     * @return $this
     */
    public function setDaviPlata($davi_plata)
    {
        
        $this->davi_plata = $davi_plata;
        return $this;
    }
    
    /**
     * Gets reimbursed
     * @return bool
     */
    public function getReimbursed()
    {
        return $this->reimbursed;
    }
  
    /**
     * Sets reimbursed
     * @param bool $reimbursed 
     * @return $this
     */
    public function setReimbursed($reimbursed)
    {
        
        $this->reimbursed = $reimbursed;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(get_object_vars($this));
        }
    }
}
