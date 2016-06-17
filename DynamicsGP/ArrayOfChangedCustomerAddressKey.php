<?php

class ArrayOfChangedCustomerAddressKey implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ChangedCustomerAddressKey[] $ChangedCustomerAddressKey
     */
    protected $ChangedCustomerAddressKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ChangedCustomerAddressKey[]
     */
    public function getChangedCustomerAddressKey()
    {
      return $this->ChangedCustomerAddressKey;
    }

    /**
     * @param ChangedCustomerAddressKey[] $ChangedCustomerAddressKey
     * @return ArrayOfChangedCustomerAddressKey
     */
    public function setChangedCustomerAddressKey(array $ChangedCustomerAddressKey = null)
    {
      $this->ChangedCustomerAddressKey = $ChangedCustomerAddressKey;
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
      return isset($this->ChangedCustomerAddressKey[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ChangedCustomerAddressKey
     */
    public function offsetGet($offset)
    {
      return $this->ChangedCustomerAddressKey[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ChangedCustomerAddressKey $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ChangedCustomerAddressKey[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ChangedCustomerAddressKey[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ChangedCustomerAddressKey Return the current element
     */
    public function current()
    {
      return current($this->ChangedCustomerAddressKey);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ChangedCustomerAddressKey);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ChangedCustomerAddressKey);
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
      reset($this->ChangedCustomerAddressKey);
    }

    /**
     * Countable implementation
     *
     * @return ChangedCustomerAddressKey Return count of elements
     */
    public function count()
    {
      return count($this->ChangedCustomerAddressKey);
    }

}
