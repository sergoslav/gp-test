<?php

class ArrayOfShippingMethod implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ShippingMethod[] $ShippingMethod
     */
    protected $ShippingMethod = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ShippingMethod[]
     */
    public function getShippingMethod()
    {
      return $this->ShippingMethod;
    }

    /**
     * @param ShippingMethod[] $ShippingMethod
     * @return ArrayOfShippingMethod
     */
    public function setShippingMethod(array $ShippingMethod = null)
    {
      $this->ShippingMethod = $ShippingMethod;
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
      return isset($this->ShippingMethod[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ShippingMethod
     */
    public function offsetGet($offset)
    {
      return $this->ShippingMethod[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ShippingMethod $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ShippingMethod[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ShippingMethod[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ShippingMethod Return the current element
     */
    public function current()
    {
      return current($this->ShippingMethod);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ShippingMethod);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ShippingMethod);
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
      reset($this->ShippingMethod);
    }

    /**
     * Countable implementation
     *
     * @return ShippingMethod Return count of elements
     */
    public function count()
    {
      return count($this->ShippingMethod);
    }

}
