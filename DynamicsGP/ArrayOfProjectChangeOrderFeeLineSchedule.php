<?php

class ArrayOfProjectChangeOrderFeeLineSchedule implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProjectChangeOrderFeeLineSchedule[] $ProjectChangeOrderFeeLineSchedule
     */
    protected $ProjectChangeOrderFeeLineSchedule = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectChangeOrderFeeLineSchedule[]
     */
    public function getProjectChangeOrderFeeLineSchedule()
    {
      return $this->ProjectChangeOrderFeeLineSchedule;
    }

    /**
     * @param ProjectChangeOrderFeeLineSchedule[] $ProjectChangeOrderFeeLineSchedule
     * @return ArrayOfProjectChangeOrderFeeLineSchedule
     */
    public function setProjectChangeOrderFeeLineSchedule(array $ProjectChangeOrderFeeLineSchedule = null)
    {
      $this->ProjectChangeOrderFeeLineSchedule = $ProjectChangeOrderFeeLineSchedule;
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
      return isset($this->ProjectChangeOrderFeeLineSchedule[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProjectChangeOrderFeeLineSchedule
     */
    public function offsetGet($offset)
    {
      return $this->ProjectChangeOrderFeeLineSchedule[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProjectChangeOrderFeeLineSchedule $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProjectChangeOrderFeeLineSchedule[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProjectChangeOrderFeeLineSchedule[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProjectChangeOrderFeeLineSchedule Return the current element
     */
    public function current()
    {
      return current($this->ProjectChangeOrderFeeLineSchedule);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProjectChangeOrderFeeLineSchedule);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProjectChangeOrderFeeLineSchedule);
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
      reset($this->ProjectChangeOrderFeeLineSchedule);
    }

    /**
     * Countable implementation
     *
     * @return ProjectChangeOrderFeeLineSchedule Return count of elements
     */
    public function count()
    {
      return count($this->ProjectChangeOrderFeeLineSchedule);
    }

}
