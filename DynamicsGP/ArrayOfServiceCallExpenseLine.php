<?php

class ArrayOfServiceCallExpenseLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ServiceCallExpenseLine[] $ServiceCallExpenseLine
     */
    protected $ServiceCallExpenseLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceCallExpenseLine[]
     */
    public function getServiceCallExpenseLine()
    {
      return $this->ServiceCallExpenseLine;
    }

    /**
     * @param ServiceCallExpenseLine[] $ServiceCallExpenseLine
     * @return ArrayOfServiceCallExpenseLine
     */
    public function setServiceCallExpenseLine(array $ServiceCallExpenseLine = null)
    {
      $this->ServiceCallExpenseLine = $ServiceCallExpenseLine;
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
      return isset($this->ServiceCallExpenseLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ServiceCallExpenseLine
     */
    public function offsetGet($offset)
    {
      return $this->ServiceCallExpenseLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ServiceCallExpenseLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ServiceCallExpenseLine[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ServiceCallExpenseLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ServiceCallExpenseLine Return the current element
     */
    public function current()
    {
      return current($this->ServiceCallExpenseLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServiceCallExpenseLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServiceCallExpenseLine);
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
      reset($this->ServiceCallExpenseLine);
    }

    /**
     * Countable implementation
     *
     * @return ServiceCallExpenseLine Return count of elements
     */
    public function count()
    {
      return count($this->ServiceCallExpenseLine);
    }

}
