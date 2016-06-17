<?php

class ArrayOfNullableOfManufacturingOrderStatusfo2IbYCo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ManufacturingOrderStatus[] $ManufacturingOrderStatus
     */
    protected $ManufacturingOrderStatus = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ManufacturingOrderStatus[]
     */
    public function getManufacturingOrderStatus()
    {
      return $this->ManufacturingOrderStatus;
    }

    /**
     * @param ManufacturingOrderStatus[] $ManufacturingOrderStatus
     * @return ArrayOfNullableOfManufacturingOrderStatusfo2IbYCo
     */
    public function setManufacturingOrderStatus(array $ManufacturingOrderStatus = null)
    {
      $this->ManufacturingOrderStatus = $ManufacturingOrderStatus;
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
      return isset($this->ManufacturingOrderStatus[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ManufacturingOrderStatus
     */
    public function offsetGet($offset)
    {
      return $this->ManufacturingOrderStatus[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ManufacturingOrderStatus $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ManufacturingOrderStatus[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ManufacturingOrderStatus[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ManufacturingOrderStatus Return the current element
     */
    public function current()
    {
      return current($this->ManufacturingOrderStatus);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ManufacturingOrderStatus);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ManufacturingOrderStatus);
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
      reset($this->ManufacturingOrderStatus);
    }

    /**
     * Countable implementation
     *
     * @return ManufacturingOrderStatus Return count of elements
     */
    public function count()
    {
      return count($this->ManufacturingOrderStatus);
    }

}
