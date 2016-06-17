<?php

class ArrayOfChangedItemKey implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ChangedItemKey[] $ChangedItemKey
     */
    protected $ChangedItemKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ChangedItemKey[]
     */
    public function getChangedItemKey()
    {
      return $this->ChangedItemKey;
    }

    /**
     * @param ChangedItemKey[] $ChangedItemKey
     * @return ArrayOfChangedItemKey
     */
    public function setChangedItemKey(array $ChangedItemKey = null)
    {
      $this->ChangedItemKey = $ChangedItemKey;
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
      return isset($this->ChangedItemKey[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ChangedItemKey
     */
    public function offsetGet($offset)
    {
      return $this->ChangedItemKey[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ChangedItemKey $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ChangedItemKey[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ChangedItemKey[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ChangedItemKey Return the current element
     */
    public function current()
    {
      return current($this->ChangedItemKey);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ChangedItemKey);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ChangedItemKey);
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
      reset($this->ChangedItemKey);
    }

    /**
     * Countable implementation
     *
     * @return ChangedItemKey Return count of elements
     */
    public function count()
    {
      return count($this->ChangedItemKey);
    }

}
