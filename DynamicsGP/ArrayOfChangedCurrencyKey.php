<?php

class ArrayOfChangedCurrencyKey implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ChangedCurrencyKey[] $ChangedCurrencyKey
     */
    protected $ChangedCurrencyKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ChangedCurrencyKey[]
     */
    public function getChangedCurrencyKey()
    {
      return $this->ChangedCurrencyKey;
    }

    /**
     * @param ChangedCurrencyKey[] $ChangedCurrencyKey
     * @return ArrayOfChangedCurrencyKey
     */
    public function setChangedCurrencyKey(array $ChangedCurrencyKey = null)
    {
      $this->ChangedCurrencyKey = $ChangedCurrencyKey;
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
      return isset($this->ChangedCurrencyKey[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ChangedCurrencyKey
     */
    public function offsetGet($offset)
    {
      return $this->ChangedCurrencyKey[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ChangedCurrencyKey $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ChangedCurrencyKey[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ChangedCurrencyKey[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ChangedCurrencyKey Return the current element
     */
    public function current()
    {
      return current($this->ChangedCurrencyKey);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ChangedCurrencyKey);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ChangedCurrencyKey);
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
      reset($this->ChangedCurrencyKey);
    }

    /**
     * Countable implementation
     *
     * @return ChangedCurrencyKey Return count of elements
     */
    public function count()
    {
      return count($this->ChangedCurrencyKey);
    }

}
