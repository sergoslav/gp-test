<?php

class ArrayOfVendorAddress implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var VendorAddress[] $VendorAddress
     */
    protected $VendorAddress = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return VendorAddress[]
     */
    public function getVendorAddress()
    {
      return $this->VendorAddress;
    }

    /**
     * @param VendorAddress[] $VendorAddress
     * @return ArrayOfVendorAddress
     */
    public function setVendorAddress(array $VendorAddress = null)
    {
      $this->VendorAddress = $VendorAddress;
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
      return isset($this->VendorAddress[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return VendorAddress
     */
    public function offsetGet($offset)
    {
      return $this->VendorAddress[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param VendorAddress $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->VendorAddress[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->VendorAddress[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return VendorAddress Return the current element
     */
    public function current()
    {
      return current($this->VendorAddress);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->VendorAddress);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->VendorAddress);
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
      reset($this->VendorAddress);
    }

    /**
     * Countable implementation
     *
     * @return VendorAddress Return count of elements
     */
    public function count()
    {
      return count($this->VendorAddress);
    }

}
