<?php

class ArrayOfProjectFeeSchedule implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProjectFeeSchedule[] $ProjectFeeSchedule
     */
    protected $ProjectFeeSchedule = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectFeeSchedule[]
     */
    public function getProjectFeeSchedule()
    {
      return $this->ProjectFeeSchedule;
    }

    /**
     * @param ProjectFeeSchedule[] $ProjectFeeSchedule
     * @return ArrayOfProjectFeeSchedule
     */
    public function setProjectFeeSchedule(array $ProjectFeeSchedule = null)
    {
      $this->ProjectFeeSchedule = $ProjectFeeSchedule;
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
      return isset($this->ProjectFeeSchedule[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProjectFeeSchedule
     */
    public function offsetGet($offset)
    {
      return $this->ProjectFeeSchedule[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProjectFeeSchedule $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProjectFeeSchedule[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProjectFeeSchedule[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProjectFeeSchedule Return the current element
     */
    public function current()
    {
      return current($this->ProjectFeeSchedule);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProjectFeeSchedule);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProjectFeeSchedule);
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
      reset($this->ProjectFeeSchedule);
    }

    /**
     * Countable implementation
     *
     * @return ProjectFeeSchedule Return count of elements
     */
    public function count()
    {
      return count($this->ProjectFeeSchedule);
    }

}
