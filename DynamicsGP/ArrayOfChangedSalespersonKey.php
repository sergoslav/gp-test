<?php

class ArrayOfChangedSalespersonKey implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ChangedSalespersonKey[] $ChangedSalespersonKey
     */
    protected $ChangedSalespersonKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ChangedSalespersonKey[]
     */
    public function getChangedSalespersonKey()
    {
      return $this->ChangedSalespersonKey;
    }

    /**
     * @param ChangedSalespersonKey[] $ChangedSalespersonKey
     * @return ArrayOfChangedSalespersonKey
     */
    public function setChangedSalespersonKey(array $ChangedSalespersonKey = null)
    {
      $this->ChangedSalespersonKey = $ChangedSalespersonKey;
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
      return isset($this->ChangedSalespersonKey[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ChangedSalespersonKey
     */
    public function offsetGet($offset)
    {
      return $this->ChangedSalespersonKey[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ChangedSalespersonKey $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ChangedSalespersonKey[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ChangedSalespersonKey[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ChangedSalespersonKey Return the current element
     */
    public function current()
    {
      return current($this->ChangedSalespersonKey);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ChangedSalespersonKey);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ChangedSalespersonKey);
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
      reset($this->ChangedSalespersonKey);
    }

    /**
     * Countable implementation
     *
     * @return ChangedSalespersonKey Return count of elements
     */
    public function count()
    {
      return count($this->ChangedSalespersonKey);
    }

}
