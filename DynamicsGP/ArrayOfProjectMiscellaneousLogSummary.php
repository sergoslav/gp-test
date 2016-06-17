<?php

class ArrayOfProjectMiscellaneousLogSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProjectMiscellaneousLogSummary[] $ProjectMiscellaneousLogSummary
     */
    protected $ProjectMiscellaneousLogSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectMiscellaneousLogSummary[]
     */
    public function getProjectMiscellaneousLogSummary()
    {
      return $this->ProjectMiscellaneousLogSummary;
    }

    /**
     * @param ProjectMiscellaneousLogSummary[] $ProjectMiscellaneousLogSummary
     * @return ArrayOfProjectMiscellaneousLogSummary
     */
    public function setProjectMiscellaneousLogSummary(array $ProjectMiscellaneousLogSummary = null)
    {
      $this->ProjectMiscellaneousLogSummary = $ProjectMiscellaneousLogSummary;
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
      return isset($this->ProjectMiscellaneousLogSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProjectMiscellaneousLogSummary
     */
    public function offsetGet($offset)
    {
      return $this->ProjectMiscellaneousLogSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProjectMiscellaneousLogSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProjectMiscellaneousLogSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProjectMiscellaneousLogSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProjectMiscellaneousLogSummary Return the current element
     */
    public function current()
    {
      return current($this->ProjectMiscellaneousLogSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProjectMiscellaneousLogSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProjectMiscellaneousLogSummary);
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
      reset($this->ProjectMiscellaneousLogSummary);
    }

    /**
     * Countable implementation
     *
     * @return ProjectMiscellaneousLogSummary Return count of elements
     */
    public function count()
    {
      return count($this->ProjectMiscellaneousLogSummary);
    }

}
