<?php

class ArrayOfVendorSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var VendorSummary[] $VendorSummary
     */
    protected $VendorSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return VendorSummary[]
     */
    public function getVendorSummary()
    {
      return $this->VendorSummary;
    }

    /**
     * @param VendorSummary[] $VendorSummary
     * @return ArrayOfVendorSummary
     */
    public function setVendorSummary(array $VendorSummary = null)
    {
      $this->VendorSummary = $VendorSummary;
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
      return isset($this->VendorSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return VendorSummary
     */
    public function offsetGet($offset)
    {
      return $this->VendorSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param VendorSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->VendorSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->VendorSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return VendorSummary Return the current element
     */
    public function current()
    {
      return current($this->VendorSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->VendorSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->VendorSummary);
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
      reset($this->VendorSummary);
    }

    /**
     * Countable implementation
     *
     * @return VendorSummary Return count of elements
     */
    public function count()
    {
      return count($this->VendorSummary);
    }

}
