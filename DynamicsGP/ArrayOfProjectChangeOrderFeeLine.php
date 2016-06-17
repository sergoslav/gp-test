<?php

class ArrayOfProjectChangeOrderFeeLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProjectChangeOrderFeeLine[] $ProjectChangeOrderFeeLine
     */
    protected $ProjectChangeOrderFeeLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectChangeOrderFeeLine[]
     */
    public function getProjectChangeOrderFeeLine()
    {
      return $this->ProjectChangeOrderFeeLine;
    }

    /**
     * @param ProjectChangeOrderFeeLine[] $ProjectChangeOrderFeeLine
     * @return ArrayOfProjectChangeOrderFeeLine
     */
    public function setProjectChangeOrderFeeLine(array $ProjectChangeOrderFeeLine = null)
    {
      $this->ProjectChangeOrderFeeLine = $ProjectChangeOrderFeeLine;
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
      return isset($this->ProjectChangeOrderFeeLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProjectChangeOrderFeeLine
     */
    public function offsetGet($offset)
    {
      return $this->ProjectChangeOrderFeeLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProjectChangeOrderFeeLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProjectChangeOrderFeeLine[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProjectChangeOrderFeeLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProjectChangeOrderFeeLine Return the current element
     */
    public function current()
    {
      return current($this->ProjectChangeOrderFeeLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProjectChangeOrderFeeLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProjectChangeOrderFeeLine);
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
      reset($this->ProjectChangeOrderFeeLine);
    }

    /**
     * Countable implementation
     *
     * @return ProjectChangeOrderFeeLine Return count of elements
     */
    public function count()
    {
      return count($this->ProjectChangeOrderFeeLine);
    }

}
