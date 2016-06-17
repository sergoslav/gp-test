<?php

class ArrayOfProjectTimesheetLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProjectTimesheetLine[] $ProjectTimesheetLine
     */
    protected $ProjectTimesheetLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectTimesheetLine[]
     */
    public function getProjectTimesheetLine()
    {
      return $this->ProjectTimesheetLine;
    }

    /**
     * @param ProjectTimesheetLine[] $ProjectTimesheetLine
     * @return ArrayOfProjectTimesheetLine
     */
    public function setProjectTimesheetLine(array $ProjectTimesheetLine = null)
    {
      $this->ProjectTimesheetLine = $ProjectTimesheetLine;
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
      return isset($this->ProjectTimesheetLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProjectTimesheetLine
     */
    public function offsetGet($offset)
    {
      return $this->ProjectTimesheetLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProjectTimesheetLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProjectTimesheetLine[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProjectTimesheetLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProjectTimesheetLine Return the current element
     */
    public function current()
    {
      return current($this->ProjectTimesheetLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProjectTimesheetLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProjectTimesheetLine);
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
      reset($this->ProjectTimesheetLine);
    }

    /**
     * Countable implementation
     *
     * @return ProjectTimesheetLine Return count of elements
     */
    public function count()
    {
      return count($this->ProjectTimesheetLine);
    }

}
