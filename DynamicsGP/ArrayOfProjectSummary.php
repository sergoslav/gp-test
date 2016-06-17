<?php

class ArrayOfProjectSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProjectSummary[] $ProjectSummary
     */
    protected $ProjectSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectSummary[]
     */
    public function getProjectSummary()
    {
      return $this->ProjectSummary;
    }

    /**
     * @param ProjectSummary[] $ProjectSummary
     * @return ArrayOfProjectSummary
     */
    public function setProjectSummary(array $ProjectSummary = null)
    {
      $this->ProjectSummary = $ProjectSummary;
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
      return isset($this->ProjectSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProjectSummary
     */
    public function offsetGet($offset)
    {
      return $this->ProjectSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProjectSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProjectSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProjectSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProjectSummary Return the current element
     */
    public function current()
    {
      return current($this->ProjectSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProjectSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProjectSummary);
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
      reset($this->ProjectSummary);
    }

    /**
     * Countable implementation
     *
     * @return ProjectSummary Return count of elements
     */
    public function count()
    {
      return count($this->ProjectSummary);
    }

}
