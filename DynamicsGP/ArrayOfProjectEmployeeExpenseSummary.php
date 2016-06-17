<?php

class ArrayOfProjectEmployeeExpenseSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProjectEmployeeExpenseSummary[] $ProjectEmployeeExpenseSummary
     */
    protected $ProjectEmployeeExpenseSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectEmployeeExpenseSummary[]
     */
    public function getProjectEmployeeExpenseSummary()
    {
      return $this->ProjectEmployeeExpenseSummary;
    }

    /**
     * @param ProjectEmployeeExpenseSummary[] $ProjectEmployeeExpenseSummary
     * @return ArrayOfProjectEmployeeExpenseSummary
     */
    public function setProjectEmployeeExpenseSummary(array $ProjectEmployeeExpenseSummary = null)
    {
      $this->ProjectEmployeeExpenseSummary = $ProjectEmployeeExpenseSummary;
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
      return isset($this->ProjectEmployeeExpenseSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProjectEmployeeExpenseSummary
     */
    public function offsetGet($offset)
    {
      return $this->ProjectEmployeeExpenseSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProjectEmployeeExpenseSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProjectEmployeeExpenseSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProjectEmployeeExpenseSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProjectEmployeeExpenseSummary Return the current element
     */
    public function current()
    {
      return current($this->ProjectEmployeeExpenseSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProjectEmployeeExpenseSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProjectEmployeeExpenseSummary);
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
      reset($this->ProjectEmployeeExpenseSummary);
    }

    /**
     * Countable implementation
     *
     * @return ProjectEmployeeExpenseSummary Return count of elements
     */
    public function count()
    {
      return count($this->ProjectEmployeeExpenseSummary);
    }

}
