<?php

class ArrayOfProjectFee implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProjectFee[] $ProjectFee
     */
    protected $ProjectFee = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectFee[]
     */
    public function getProjectFee()
    {
      return $this->ProjectFee;
    }

    /**
     * @param ProjectFee[] $ProjectFee
     * @return ArrayOfProjectFee
     */
    public function setProjectFee(array $ProjectFee = null)
    {
      $this->ProjectFee = $ProjectFee;
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
      return isset($this->ProjectFee[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProjectFee
     */
    public function offsetGet($offset)
    {
      return $this->ProjectFee[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProjectFee $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProjectFee[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProjectFee[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProjectFee Return the current element
     */
    public function current()
    {
      return current($this->ProjectFee);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProjectFee);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProjectFee);
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
      reset($this->ProjectFee);
    }

    /**
     * Countable implementation
     *
     * @return ProjectFee Return count of elements
     */
    public function count()
    {
      return count($this->ProjectFee);
    }

}
