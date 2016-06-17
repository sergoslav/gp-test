<?php

class ArrayOfVendorAddressSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var VendorAddressSummary[] $VendorAddressSummary
     */
    protected $VendorAddressSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return VendorAddressSummary[]
     */
    public function getVendorAddressSummary()
    {
      return $this->VendorAddressSummary;
    }

    /**
     * @param VendorAddressSummary[] $VendorAddressSummary
     * @return ArrayOfVendorAddressSummary
     */
    public function setVendorAddressSummary(array $VendorAddressSummary = null)
    {
      $this->VendorAddressSummary = $VendorAddressSummary;
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
      return isset($this->VendorAddressSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return VendorAddressSummary
     */
    public function offsetGet($offset)
    {
      return $this->VendorAddressSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param VendorAddressSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->VendorAddressSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->VendorAddressSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return VendorAddressSummary Return the current element
     */
    public function current()
    {
      return current($this->VendorAddressSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->VendorAddressSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->VendorAddressSummary);
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
      reset($this->VendorAddressSummary);
    }

    /**
     * Countable implementation
     *
     * @return VendorAddressSummary Return count of elements
     */
    public function count()
    {
      return count($this->VendorAddressSummary);
    }

}
