<?php
/**
 * Settlement
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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

namespace Swagger\Client\Model;

use \ArrayAccess;
/**
 * Settlement Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Settlement implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'timestamp' => '\DateTime',
        'symbol' => 'string',
        'settlement_type' => 'string',
        'settled_price' => 'double',
        'bankrupt' => 'Number',
        'tax_base' => 'Number',
        'tax_rate' => 'double'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'timestamp' => 'timestamp',
        'symbol' => 'symbol',
        'settlement_type' => 'settlementType',
        'settled_price' => 'settledPrice',
        'bankrupt' => 'bankrupt',
        'tax_base' => 'taxBase',
        'tax_rate' => 'taxRate'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'timestamp' => 'setTimestamp',
        'symbol' => 'setSymbol',
        'settlement_type' => 'setSettlementType',
        'settled_price' => 'setSettledPrice',
        'bankrupt' => 'setBankrupt',
        'tax_base' => 'setTaxBase',
        'tax_rate' => 'setTaxRate'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'timestamp' => 'getTimestamp',
        'symbol' => 'getSymbol',
        'settlement_type' => 'getSettlementType',
        'settled_price' => 'getSettledPrice',
        'bankrupt' => 'getBankrupt',
        'tax_base' => 'getTaxBase',
        'tax_rate' => 'getTaxRate'
    );
  
    
    /**
      * $timestamp 
      * @var \DateTime
      */
    protected $timestamp;
    
    /**
      * $symbol 
      * @var string
      */
    protected $symbol;
    
    /**
      * $settlement_type 
      * @var string
      */
    protected $settlement_type;
    
    /**
      * $settled_price 
      * @var double
      */
    protected $settled_price;
    
    /**
      * $bankrupt 
      * @var Number
      */
    protected $bankrupt;
    
    /**
      * $tax_base 
      * @var Number
      */
    protected $tax_base;
    
    /**
      * $tax_rate 
      * @var double
      */
    protected $tax_rate;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->timestamp = $data["timestamp"];
            $this->symbol = $data["symbol"];
            $this->settlement_type = $data["settlement_type"];
            $this->settled_price = $data["settled_price"];
            $this->bankrupt = $data["bankrupt"];
            $this->tax_base = $data["tax_base"];
            $this->tax_rate = $data["tax_rate"];
        }
    }
    
    /**
     * Gets timestamp
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
  
    /**
     * Sets timestamp
     * @param \DateTime $timestamp 
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        
        $this->timestamp = $timestamp;
        return $this;
    }
    
    /**
     * Gets symbol
     * @return string
     */
    public function getSymbol()
    {
        return $this->symbol;
    }
  
    /**
     * Sets symbol
     * @param string $symbol 
     * @return $this
     */
    public function setSymbol($symbol)
    {
        
        $this->symbol = $symbol;
        return $this;
    }
    
    /**
     * Gets settlement_type
     * @return string
     */
    public function getSettlementType()
    {
        return $this->settlement_type;
    }
  
    /**
     * Sets settlement_type
     * @param string $settlement_type 
     * @return $this
     */
    public function setSettlementType($settlement_type)
    {
        
        $this->settlement_type = $settlement_type;
        return $this;
    }
    
    /**
     * Gets settled_price
     * @return double
     */
    public function getSettledPrice()
    {
        return $this->settled_price;
    }
  
    /**
     * Sets settled_price
     * @param double $settled_price 
     * @return $this
     */
    public function setSettledPrice($settled_price)
    {
        
        $this->settled_price = $settled_price;
        return $this;
    }
    
    /**
     * Gets bankrupt
     * @return Number
     */
    public function getBankrupt()
    {
        return $this->bankrupt;
    }
  
    /**
     * Sets bankrupt
     * @param Number $bankrupt 
     * @return $this
     */
    public function setBankrupt($bankrupt)
    {
        
        $this->bankrupt = $bankrupt;
        return $this;
    }
    
    /**
     * Gets tax_base
     * @return Number
     */
    public function getTaxBase()
    {
        return $this->tax_base;
    }
  
    /**
     * Sets tax_base
     * @param Number $tax_base 
     * @return $this
     */
    public function setTaxBase($tax_base)
    {
        
        $this->tax_base = $tax_base;
        return $this;
    }
    
    /**
     * Gets tax_rate
     * @return double
     */
    public function getTaxRate()
    {
        return $this->tax_rate;
    }
  
    /**
     * Sets tax_rate
     * @param double $tax_rate 
     * @return $this
     */
    public function setTaxRate($tax_rate)
    {
        
        $this->tax_rate = $tax_rate;
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