<?php

class ArrayOfServiceQuoteSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ServiceQuoteSummary[] $ServiceQuoteSummary
     */
    protected $ServiceQuoteSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceQuoteSummary[]
     */
    public function getServiceQuoteSummary()
    {
      return $this->ServiceQuoteSummary;
    }

    /**
     * @param ServiceQuoteSummary[] $ServiceQuoteSummary
     * @return ArrayOfServiceQuoteSummary
     */
    public function setServiceQuoteSummary(array $ServiceQuoteSummary = null)
    {
      $this->ServiceQuoteSummary = $ServiceQuoteSummary;
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
      return isset($this->ServiceQuoteSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ServiceQuoteSummary
     */
    public function offsetGet($offset)
    {
      return $this->ServiceQuoteSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ServiceQuoteSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ServiceQuoteSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ServiceQuoteSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ServiceQuoteSummary Return the current element
     */
    public function current()
    {
      return current($this->ServiceQuoteSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServiceQuoteSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServiceQuoteSummary);
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
      reset($this->ServiceQuoteSummary);
    }

    /**
     * Countable implementation
     *
     * @return ServiceQuoteSummary Return count of elements
     */
    public function count()
    {
      return count($this->ServiceQuoteSummary);
    }

}
