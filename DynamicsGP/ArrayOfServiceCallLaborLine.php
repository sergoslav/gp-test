<?php

class ArrayOfServiceCallLaborLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ServiceCallLaborLine[] $ServiceCallLaborLine
     */
    protected $ServiceCallLaborLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceCallLaborLine[]
     */
    public function getServiceCallLaborLine()
    {
      return $this->ServiceCallLaborLine;
    }

    /**
     * @param ServiceCallLaborLine[] $ServiceCallLaborLine
     * @return ArrayOfServiceCallLaborLine
     */
    public function setServiceCallLaborLine(array $ServiceCallLaborLine = null)
    {
      $this->ServiceCallLaborLine = $ServiceCallLaborLine;
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
      return isset($this->ServiceCallLaborLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ServiceCallLaborLine
     */
    public function offsetGet($offset)
    {
      return $this->ServiceCallLaborLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ServiceCallLaborLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ServiceCallLaborLine[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ServiceCallLaborLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ServiceCallLaborLine Return the current element
     */
    public function current()
    {
      return current($this->ServiceCallLaborLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServiceCallLaborLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServiceCallLaborLine);
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
      reset($this->ServiceCallLaborLine);
    }

    /**
     * Countable implementation
     *
     * @return ServiceCallLaborLine Return count of elements
     */
    public function count()
    {
      return count($this->ServiceCallLaborLine);
    }

}
