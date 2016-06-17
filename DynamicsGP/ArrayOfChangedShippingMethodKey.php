<?php

class ArrayOfChangedShippingMethodKey implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ChangedShippingMethodKey[] $ChangedShippingMethodKey
     */
    protected $ChangedShippingMethodKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ChangedShippingMethodKey[]
     */
    public function getChangedShippingMethodKey()
    {
      return $this->ChangedShippingMethodKey;
    }

    /**
     * @param ChangedShippingMethodKey[] $ChangedShippingMethodKey
     * @return ArrayOfChangedShippingMethodKey
     */
    public function setChangedShippingMethodKey(array $ChangedShippingMethodKey = null)
    {
      $this->ChangedShippingMethodKey = $ChangedShippingMethodKey;
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
      return isset($this->ChangedShippingMethodKey[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ChangedShippingMethodKey
     */
    public function offsetGet($offset)
    {
      return $this->ChangedShippingMethodKey[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ChangedShippingMethodKey $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ChangedShippingMethodKey[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ChangedShippingMethodKey[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ChangedShippingMethodKey Return the current element
     */
    public function current()
    {
      return current($this->ChangedShippingMethodKey);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ChangedShippingMethodKey);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ChangedShippingMethodKey);
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
      reset($this->ChangedShippingMethodKey);
    }

    /**
     * Countable implementation
     *
     * @return ChangedShippingMethodKey Return count of elements
     */
    public function count()
    {
      return count($this->ChangedShippingMethodKey);
    }

}
