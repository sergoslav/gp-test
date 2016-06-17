<?php

class ArrayOfManufacturingOrderSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ManufacturingOrderSummary[] $ManufacturingOrderSummary
     */
    protected $ManufacturingOrderSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ManufacturingOrderSummary[]
     */
    public function getManufacturingOrderSummary()
    {
      return $this->ManufacturingOrderSummary;
    }

    /**
     * @param ManufacturingOrderSummary[] $ManufacturingOrderSummary
     * @return ArrayOfManufacturingOrderSummary
     */
    public function setManufacturingOrderSummary(array $ManufacturingOrderSummary = null)
    {
      $this->ManufacturingOrderSummary = $ManufacturingOrderSummary;
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
      return isset($this->ManufacturingOrderSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ManufacturingOrderSummary
     */
    public function offsetGet($offset)
    {
      return $this->ManufacturingOrderSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ManufacturingOrderSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ManufacturingOrderSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ManufacturingOrderSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ManufacturingOrderSummary Return the current element
     */
    public function current()
    {
      return current($this->ManufacturingOrderSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ManufacturingOrderSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ManufacturingOrderSummary);
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
      reset($this->ManufacturingOrderSummary);
    }

    /**
     * Countable implementation
     *
     * @return ManufacturingOrderSummary Return count of elements
     */
    public function count()
    {
      return count($this->ManufacturingOrderSummary);
    }

}
