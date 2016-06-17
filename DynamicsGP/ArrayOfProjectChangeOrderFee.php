<?php

class ArrayOfProjectChangeOrderFee implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProjectChangeOrderFee[] $ProjectChangeOrderFee
     */
    protected $ProjectChangeOrderFee = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectChangeOrderFee[]
     */
    public function getProjectChangeOrderFee()
    {
      return $this->ProjectChangeOrderFee;
    }

    /**
     * @param ProjectChangeOrderFee[] $ProjectChangeOrderFee
     * @return ArrayOfProjectChangeOrderFee
     */
    public function setProjectChangeOrderFee(array $ProjectChangeOrderFee = null)
    {
      $this->ProjectChangeOrderFee = $ProjectChangeOrderFee;
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
      return isset($this->ProjectChangeOrderFee[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProjectChangeOrderFee
     */
    public function offsetGet($offset)
    {
      return $this->ProjectChangeOrderFee[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProjectChangeOrderFee $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProjectChangeOrderFee[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProjectChangeOrderFee[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProjectChangeOrderFee Return the current element
     */
    public function current()
    {
      return current($this->ProjectChangeOrderFee);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProjectChangeOrderFee);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProjectChangeOrderFee);
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
      reset($this->ProjectChangeOrderFee);
    }

    /**
     * Countable implementation
     *
     * @return ProjectChangeOrderFee Return count of elements
     */
    public function count()
    {
      return count($this->ProjectChangeOrderFee);
    }

}
