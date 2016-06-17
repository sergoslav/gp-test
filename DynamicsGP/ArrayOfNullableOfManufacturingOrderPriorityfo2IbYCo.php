<?php

class ArrayOfNullableOfManufacturingOrderPriorityfo2IbYCo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ManufacturingOrderPriority[] $ManufacturingOrderPriority
     */
    protected $ManufacturingOrderPriority = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ManufacturingOrderPriority[]
     */
    public function getManufacturingOrderPriority()
    {
      return $this->ManufacturingOrderPriority;
    }

    /**
     * @param ManufacturingOrderPriority[] $ManufacturingOrderPriority
     * @return ArrayOfNullableOfManufacturingOrderPriorityfo2IbYCo
     */
    public function setManufacturingOrderPriority(array $ManufacturingOrderPriority = null)
    {
      $this->ManufacturingOrderPriority = $ManufacturingOrderPriority;
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
      return isset($this->ManufacturingOrderPriority[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ManufacturingOrderPriority
     */
    public function offsetGet($offset)
    {
      return $this->ManufacturingOrderPriority[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ManufacturingOrderPriority $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ManufacturingOrderPriority[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ManufacturingOrderPriority[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ManufacturingOrderPriority Return the current element
     */
    public function current()
    {
      return current($this->ManufacturingOrderPriority);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ManufacturingOrderPriority);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ManufacturingOrderPriority);
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
      reset($this->ManufacturingOrderPriority);
    }

    /**
     * Countable implementation
     *
     * @return ManufacturingOrderPriority Return count of elements
     */
    public function count()
    {
      return count($this->ManufacturingOrderPriority);
    }

}
