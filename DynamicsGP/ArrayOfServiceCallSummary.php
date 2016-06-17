<?php

class ArrayOfServiceCallSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ServiceCallSummary[] $ServiceCallSummary
     */
    protected $ServiceCallSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceCallSummary[]
     */
    public function getServiceCallSummary()
    {
      return $this->ServiceCallSummary;
    }

    /**
     * @param ServiceCallSummary[] $ServiceCallSummary
     * @return ArrayOfServiceCallSummary
     */
    public function setServiceCallSummary(array $ServiceCallSummary = null)
    {
      $this->ServiceCallSummary = $ServiceCallSummary;
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
      return isset($this->ServiceCallSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ServiceCallSummary
     */
    public function offsetGet($offset)
    {
      return $this->ServiceCallSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ServiceCallSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ServiceCallSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ServiceCallSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ServiceCallSummary Return the current element
     */
    public function current()
    {
      return current($this->ServiceCallSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServiceCallSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServiceCallSummary);
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
      reset($this->ServiceCallSummary);
    }

    /**
     * Countable implementation
     *
     * @return ServiceCallSummary Return count of elements
     */
    public function count()
    {
      return count($this->ServiceCallSummary);
    }

}
