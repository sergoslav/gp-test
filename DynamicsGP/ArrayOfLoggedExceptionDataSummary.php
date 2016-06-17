<?php

class ArrayOfLoggedExceptionDataSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var LoggedExceptionDataSummary[] $LoggedExceptionDataSummary
     */
    protected $LoggedExceptionDataSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return LoggedExceptionDataSummary[]
     */
    public function getLoggedExceptionDataSummary()
    {
      return $this->LoggedExceptionDataSummary;
    }

    /**
     * @param LoggedExceptionDataSummary[] $LoggedExceptionDataSummary
     * @return ArrayOfLoggedExceptionDataSummary
     */
    public function setLoggedExceptionDataSummary(array $LoggedExceptionDataSummary = null)
    {
      $this->LoggedExceptionDataSummary = $LoggedExceptionDataSummary;
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
      return isset($this->LoggedExceptionDataSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return LoggedExceptionDataSummary
     */
    public function offsetGet($offset)
    {
      return $this->LoggedExceptionDataSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param LoggedExceptionDataSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->LoggedExceptionDataSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->LoggedExceptionDataSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return LoggedExceptionDataSummary Return the current element
     */
    public function current()
    {
      return current($this->LoggedExceptionDataSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->LoggedExceptionDataSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->LoggedExceptionDataSummary);
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
      reset($this->LoggedExceptionDataSummary);
    }

    /**
     * Countable implementation
     *
     * @return LoggedExceptionDataSummary Return count of elements
     */
    public function count()
    {
      return count($this->LoggedExceptionDataSummary);
    }

}
