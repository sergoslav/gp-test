<?php

class ArrayOfChangedPricingKey implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ChangedPricingKey[] $ChangedPricingKey
     */
    protected $ChangedPricingKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ChangedPricingKey[]
     */
    public function getChangedPricingKey()
    {
      return $this->ChangedPricingKey;
    }

    /**
     * @param ChangedPricingKey[] $ChangedPricingKey
     * @return ArrayOfChangedPricingKey
     */
    public function setChangedPricingKey(array $ChangedPricingKey = null)
    {
      $this->ChangedPricingKey = $ChangedPricingKey;
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
      return isset($this->ChangedPricingKey[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ChangedPricingKey
     */
    public function offsetGet($offset)
    {
      return $this->ChangedPricingKey[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ChangedPricingKey $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ChangedPricingKey[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ChangedPricingKey[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ChangedPricingKey Return the current element
     */
    public function current()
    {
      return current($this->ChangedPricingKey);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ChangedPricingKey);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ChangedPricingKey);
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
      reset($this->ChangedPricingKey);
    }

    /**
     * Countable implementation
     *
     * @return ChangedPricingKey Return count of elements
     */
    public function count()
    {
      return count($this->ChangedPricingKey);
    }

}
