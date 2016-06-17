<?php

class ArrayOfProjectMiscellaneousLogLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProjectMiscellaneousLogLine[] $ProjectMiscellaneousLogLine
     */
    protected $ProjectMiscellaneousLogLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectMiscellaneousLogLine[]
     */
    public function getProjectMiscellaneousLogLine()
    {
      return $this->ProjectMiscellaneousLogLine;
    }

    /**
     * @param ProjectMiscellaneousLogLine[] $ProjectMiscellaneousLogLine
     * @return ArrayOfProjectMiscellaneousLogLine
     */
    public function setProjectMiscellaneousLogLine(array $ProjectMiscellaneousLogLine = null)
    {
      $this->ProjectMiscellaneousLogLine = $ProjectMiscellaneousLogLine;
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
      return isset($this->ProjectMiscellaneousLogLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProjectMiscellaneousLogLine
     */
    public function offsetGet($offset)
    {
      return $this->ProjectMiscellaneousLogLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProjectMiscellaneousLogLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProjectMiscellaneousLogLine[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProjectMiscellaneousLogLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProjectMiscellaneousLogLine Return the current element
     */
    public function current()
    {
      return current($this->ProjectMiscellaneousLogLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProjectMiscellaneousLogLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProjectMiscellaneousLogLine);
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
      reset($this->ProjectMiscellaneousLogLine);
    }

    /**
     * Countable implementation
     *
     * @return ProjectMiscellaneousLogLine Return count of elements
     */
    public function count()
    {
      return count($this->ProjectMiscellaneousLogLine);
    }

}
