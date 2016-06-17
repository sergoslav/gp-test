<?php

class ArrayOfChangedTaxScheduleDetailKey implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ChangedTaxScheduleDetailKey[] $ChangedTaxScheduleDetailKey
     */
    protected $ChangedTaxScheduleDetailKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ChangedTaxScheduleDetailKey[]
     */
    public function getChangedTaxScheduleDetailKey()
    {
      return $this->ChangedTaxScheduleDetailKey;
    }

    /**
     * @param ChangedTaxScheduleDetailKey[] $ChangedTaxScheduleDetailKey
     * @return ArrayOfChangedTaxScheduleDetailKey
     */
    public function setChangedTaxScheduleDetailKey(array $ChangedTaxScheduleDetailKey = null)
    {
      $this->ChangedTaxScheduleDetailKey = $ChangedTaxScheduleDetailKey;
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
      return isset($this->ChangedTaxScheduleDetailKey[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ChangedTaxScheduleDetailKey
     */
    public function offsetGet($offset)
    {
      return $this->ChangedTaxScheduleDetailKey[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ChangedTaxScheduleDetailKey $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ChangedTaxScheduleDetailKey[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ChangedTaxScheduleDetailKey[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ChangedTaxScheduleDetailKey Return the current element
     */
    public function current()
    {
      return current($this->ChangedTaxScheduleDetailKey);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ChangedTaxScheduleDetailKey);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ChangedTaxScheduleDetailKey);
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
      reset($this->ChangedTaxScheduleDetailKey);
    }

    /**
     * Countable implementation
     *
     * @return ChangedTaxScheduleDetailKey Return count of elements
     */
    public function count()
    {
      return count($this->ChangedTaxScheduleDetailKey);
    }

}
