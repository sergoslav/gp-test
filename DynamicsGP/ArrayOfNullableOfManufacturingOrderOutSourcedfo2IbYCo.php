<?php

class ArrayOfNullableOfManufacturingOrderOutSourcedfo2IbYCo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ManufacturingOrderOutSourced[] $ManufacturingOrderOutSourced
     */
    protected $ManufacturingOrderOutSourced = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ManufacturingOrderOutSourced[]
     */
    public function getManufacturingOrderOutSourced()
    {
      return $this->ManufacturingOrderOutSourced;
    }

    /**
     * @param ManufacturingOrderOutSourced[] $ManufacturingOrderOutSourced
     * @return ArrayOfNullableOfManufacturingOrderOutSourcedfo2IbYCo
     */
    public function setManufacturingOrderOutSourced(array $ManufacturingOrderOutSourced = null)
    {
      $this->ManufacturingOrderOutSourced = $ManufacturingOrderOutSourced;
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
      return isset($this->ManufacturingOrderOutSourced[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ManufacturingOrderOutSourced
     */
    public function offsetGet($offset)
    {
      return $this->ManufacturingOrderOutSourced[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ManufacturingOrderOutSourced $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ManufacturingOrderOutSourced[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ManufacturingOrderOutSourced[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ManufacturingOrderOutSourced Return the current element
     */
    public function current()
    {
      return current($this->ManufacturingOrderOutSourced);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ManufacturingOrderOutSourced);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ManufacturingOrderOutSourced);
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
      reset($this->ManufacturingOrderOutSourced);
    }

    /**
     * Countable implementation
     *
     * @return ManufacturingOrderOutSourced Return count of elements
     */
    public function count()
    {
      return count($this->ManufacturingOrderOutSourced);
    }

}
