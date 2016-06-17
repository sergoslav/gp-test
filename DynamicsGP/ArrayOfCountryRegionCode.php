<?php

class ArrayOfCountryRegionCode implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CountryRegionCode[] $CountryRegionCode
     */
    protected $CountryRegionCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CountryRegionCode[]
     */
    public function getCountryRegionCode()
    {
      return $this->CountryRegionCode;
    }

    /**
     * @param CountryRegionCode[] $CountryRegionCode
     * @return ArrayOfCountryRegionCode
     */
    public function setCountryRegionCode(array $CountryRegionCode = null)
    {
      $this->CountryRegionCode = $CountryRegionCode;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->CountryRegionCode[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CountryRegionCode
     */
    public function offsetGet($offset)
    {
      return $this->CountryRegionCode[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CountryRegionCode $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CountryRegionCode[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CountryRegionCode[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CountryRegionCode Return the current element
     */
    public function current()
    {
      return current($this->CountryRegionCode);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CountryRegionCode);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CountryRegionCode);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->CountryRegionCode);
    }

    /**
     * Countable implementation
     *
     * @return CountryRegionCode Return count of elements
     */
    public function count()
    {
      return count($this->CountryRegionCode);
    }

}
