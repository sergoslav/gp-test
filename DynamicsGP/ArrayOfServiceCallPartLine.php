<?php

class ArrayOfServiceCallPartLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ServiceCallPartLine[] $ServiceCallPartLine
     */
    protected $ServiceCallPartLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceCallPartLine[]
     */
    public function getServiceCallPartLine()
    {
      return $this->ServiceCallPartLine;
    }

    /**
     * @param ServiceCallPartLine[] $ServiceCallPartLine
     * @return ArrayOfServiceCallPartLine
     */
    public function setServiceCallPartLine(array $ServiceCallPartLine = null)
    {
      $this->ServiceCallPartLine = $ServiceCallPartLine;
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
      return isset($this->ServiceCallPartLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ServiceCallPartLine
     */
    public function offsetGet($offset)
    {
      return $this->ServiceCallPartLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ServiceCallPartLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ServiceCallPartLine[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ServiceCallPartLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ServiceCallPartLine Return the current element
     */
    public function current()
    {
      return current($this->ServiceCallPartLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServiceCallPartLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServiceCallPartLine);
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
      reset($this->ServiceCallPartLine);
    }

    /**
     * Countable implementation
     *
     * @return ServiceCallPartLine Return count of elements
     */
    public function count()
    {
      return count($this->ServiceCallPartLine);
    }

}
