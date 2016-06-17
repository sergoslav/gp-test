<?php

class ArrayOfProjectEmployeeExpenseLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProjectEmployeeExpenseLine[] $ProjectEmployeeExpenseLine
     */
    protected $ProjectEmployeeExpenseLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectEmployeeExpenseLine[]
     */
    public function getProjectEmployeeExpenseLine()
    {
      return $this->ProjectEmployeeExpenseLine;
    }

    /**
     * @param ProjectEmployeeExpenseLine[] $ProjectEmployeeExpenseLine
     * @return ArrayOfProjectEmployeeExpenseLine
     */
    public function setProjectEmployeeExpenseLine(array $ProjectEmployeeExpenseLine = null)
    {
      $this->ProjectEmployeeExpenseLine = $ProjectEmployeeExpenseLine;
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
      return isset($this->ProjectEmployeeExpenseLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProjectEmployeeExpenseLine
     */
    public function offsetGet($offset)
    {
      return $this->ProjectEmployeeExpenseLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProjectEmployeeExpenseLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProjectEmployeeExpenseLine[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProjectEmployeeExpenseLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProjectEmployeeExpenseLine Return the current element
     */
    public function current()
    {
      return current($this->ProjectEmployeeExpenseLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProjectEmployeeExpenseLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProjectEmployeeExpenseLine);
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
      reset($this->ProjectEmployeeExpenseLine);
    }

    /**
     * Countable implementation
     *
     * @return ProjectEmployeeExpenseLine Return count of elements
     */
    public function count()
    {
      return count($this->ProjectEmployeeExpenseLine);
    }

}
