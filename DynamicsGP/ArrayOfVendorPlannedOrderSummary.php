<?php

class ArrayOfVendorPlannedOrderSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var VendorPlannedOrderSummary[] $VendorPlannedOrderSummary
     */
    protected $VendorPlannedOrderSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return VendorPlannedOrderSummary[]
     */
    public function getVendorPlannedOrderSummary()
    {
      return $this->VendorPlannedOrderSummary;
    }

    /**
     * @param VendorPlannedOrderSummary[] $VendorPlannedOrderSummary
     * @return ArrayOfVendorPlannedOrderSummary
     */
    public function setVendorPlannedOrderSummary(array $VendorPlannedOrderSummary = null)
    {
      $this->VendorPlannedOrderSummary = $VendorPlannedOrderSummary;
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
      return isset($this->VendorPlannedOrderSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return VendorPlannedOrderSummary
     */
    public function offsetGet($offset)
    {
      return $this->VendorPlannedOrderSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param VendorPlannedOrderSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->VendorPlannedOrderSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->VendorPlannedOrderSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return VendorPlannedOrderSummary Return the current element
     */
    public function current()
    {
      return current($this->VendorPlannedOrderSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->VendorPlannedOrderSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->VendorPlannedOrderSummary);
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
      reset($this->VendorPlannedOrderSummary);
    }

    /**
     * Countable implementation
     *
     * @return VendorPlannedOrderSummary Return count of elements
     */
    public function count()
    {
      return count($this->VendorPlannedOrderSummary);
    }

}
