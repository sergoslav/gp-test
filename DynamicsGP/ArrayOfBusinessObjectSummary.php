<?php

class ArrayOfBusinessObjectSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BusinessObjectSummary[] $BusinessObjectSummary
     */
    protected $BusinessObjectSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BusinessObjectSummary[]
     */
    public function getBusinessObjectSummary()
    {
      return $this->BusinessObjectSummary;
    }

    /**
     * @param BusinessObjectSummary[] $BusinessObjectSummary
     * @return ArrayOfBusinessObjectSummary
     */
    public function setBusinessObjectSummary(array $BusinessObjectSummary = null)
    {
      $this->BusinessObjectSummary = $BusinessObjectSummary;
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
      return isset($this->BusinessObjectSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BusinessObjectSummary
     */
    public function offsetGet($offset)
    {
      return $this->BusinessObjectSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BusinessObjectSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->BusinessObjectSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->BusinessObjectSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BusinessObjectSummary Return the current element
     */
    public function current()
    {
      return current($this->BusinessObjectSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BusinessObjectSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BusinessObjectSummary);
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
      reset($this->BusinessObjectSummary);
    }

    /**
     * Countable implementation
     *
     * @return BusinessObjectSummary Return count of elements
     */
    public function count()
    {
      return count($this->BusinessObjectSummary);
    }

}
