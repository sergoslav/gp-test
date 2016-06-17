<?php

class ArrayOfChangedUofMScheduleKey implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ChangedUofMScheduleKey[] $ChangedUofMScheduleKey
     */
    protected $ChangedUofMScheduleKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ChangedUofMScheduleKey[]
     */
    public function getChangedUofMScheduleKey()
    {
      return $this->ChangedUofMScheduleKey;
    }

    /**
     * @param ChangedUofMScheduleKey[] $ChangedUofMScheduleKey
     * @return ArrayOfChangedUofMScheduleKey
     */
    public function setChangedUofMScheduleKey(array $ChangedUofMScheduleKey = null)
    {
      $this->ChangedUofMScheduleKey = $ChangedUofMScheduleKey;
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
      return isset($this->ChangedUofMScheduleKey[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ChangedUofMScheduleKey
     */
    public function offsetGet($offset)
    {
      return $this->ChangedUofMScheduleKey[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ChangedUofMScheduleKey $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ChangedUofMScheduleKey[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ChangedUofMScheduleKey[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ChangedUofMScheduleKey Return the current element
     */
    public function current()
    {
      return current($this->ChangedUofMScheduleKey);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ChangedUofMScheduleKey);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ChangedUofMScheduleKey);
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
      reset($this->ChangedUofMScheduleKey);
    }

    /**
     * Countable implementation
     *
     * @return ChangedUofMScheduleKey Return count of elements
     */
    public function count()
    {
      return count($this->ChangedUofMScheduleKey);
    }

}
