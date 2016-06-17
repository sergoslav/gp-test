<?php

class ArrayOfProjectChangeOrderSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProjectChangeOrderSummary[] $ProjectChangeOrderSummary
     */
    protected $ProjectChangeOrderSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectChangeOrderSummary[]
     */
    public function getProjectChangeOrderSummary()
    {
      return $this->ProjectChangeOrderSummary;
    }

    /**
     * @param ProjectChangeOrderSummary[] $ProjectChangeOrderSummary
     * @return ArrayOfProjectChangeOrderSummary
     */
    public function setProjectChangeOrderSummary(array $ProjectChangeOrderSummary = null)
    {
      $this->ProjectChangeOrderSummary = $ProjectChangeOrderSummary;
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
      return isset($this->ProjectChangeOrderSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProjectChangeOrderSummary
     */
    public function offsetGet($offset)
    {
      return $this->ProjectChangeOrderSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProjectChangeOrderSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProjectChangeOrderSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProjectChangeOrderSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProjectChangeOrderSummary Return the current element
     */
    public function current()
    {
      return current($this->ProjectChangeOrderSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProjectChangeOrderSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProjectChangeOrderSummary);
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
      reset($this->ProjectChangeOrderSummary);
    }

    /**
     * Countable implementation
     *
     * @return ProjectChangeOrderSummary Return count of elements
     */
    public function count()
    {
      return count($this->ProjectChangeOrderSummary);
    }

}
