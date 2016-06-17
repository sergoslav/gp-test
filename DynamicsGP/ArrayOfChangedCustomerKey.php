<?php

class ArrayOfChangedCustomerKey implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ChangedCustomerKey[] $ChangedCustomerKey
     */
    protected $ChangedCustomerKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ChangedCustomerKey[]
     */
    public function getChangedCustomerKey()
    {
      return $this->ChangedCustomerKey;
    }

    /**
     * @param ChangedCustomerKey[] $ChangedCustomerKey
     * @return ArrayOfChangedCustomerKey
     */
    public function setChangedCustomerKey(array $ChangedCustomerKey = null)
    {
      $this->ChangedCustomerKey = $ChangedCustomerKey;
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
      return isset($this->ChangedCustomerKey[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ChangedCustomerKey
     */
    public function offsetGet($offset)
    {
      return $this->ChangedCustomerKey[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ChangedCustomerKey $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ChangedCustomerKey[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ChangedCustomerKey[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ChangedCustomerKey Return the current element
     */
    public function current()
    {
      return current($this->ChangedCustomerKey);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ChangedCustomerKey);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ChangedCustomerKey);
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
      reset($this->ChangedCustomerKey);
    }

    /**
     * Countable implementation
     *
     * @return ChangedCustomerKey Return count of elements
     */
    public function count()
    {
      return count($this->ChangedCustomerKey);
    }

}
