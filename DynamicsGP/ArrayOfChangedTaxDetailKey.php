<?php

class ArrayOfChangedTaxDetailKey implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ChangedTaxDetailKey[] $ChangedTaxDetailKey
     */
    protected $ChangedTaxDetailKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ChangedTaxDetailKey[]
     */
    public function getChangedTaxDetailKey()
    {
      return $this->ChangedTaxDetailKey;
    }

    /**
     * @param ChangedTaxDetailKey[] $ChangedTaxDetailKey
     * @return ArrayOfChangedTaxDetailKey
     */
    public function setChangedTaxDetailKey(array $ChangedTaxDetailKey = null)
    {
      $this->ChangedTaxDetailKey = $ChangedTaxDetailKey;
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
      return isset($this->ChangedTaxDetailKey[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ChangedTaxDetailKey
     */
    public function offsetGet($offset)
    {
      return $this->ChangedTaxDetailKey[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ChangedTaxDetailKey $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ChangedTaxDetailKey[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ChangedTaxDetailKey[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ChangedTaxDetailKey Return the current element
     */
    public function current()
    {
      return current($this->ChangedTaxDetailKey);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ChangedTaxDetailKey);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ChangedTaxDetailKey);
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
      reset($this->ChangedTaxDetailKey);
    }

    /**
     * Countable implementation
     *
     * @return ChangedTaxDetailKey Return count of elements
     */
    public function count()
    {
      return count($this->ChangedTaxDetailKey);
    }

}
