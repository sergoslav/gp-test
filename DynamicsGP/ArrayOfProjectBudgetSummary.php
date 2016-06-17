<?php

class ArrayOfProjectBudgetSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProjectBudgetSummary[] $ProjectBudgetSummary
     */
    protected $ProjectBudgetSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectBudgetSummary[]
     */
    public function getProjectBudgetSummary()
    {
      return $this->ProjectBudgetSummary;
    }

    /**
     * @param ProjectBudgetSummary[] $ProjectBudgetSummary
     * @return ArrayOfProjectBudgetSummary
     */
    public function setProjectBudgetSummary(array $ProjectBudgetSummary = null)
    {
      $this->ProjectBudgetSummary = $ProjectBudgetSummary;
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
      return isset($this->ProjectBudgetSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProjectBudgetSummary
     */
    public function offsetGet($offset)
    {
      return $this->ProjectBudgetSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProjectBudgetSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProjectBudgetSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProjectBudgetSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProjectBudgetSummary Return the current element
     */
    public function current()
    {
      return current($this->ProjectBudgetSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProjectBudgetSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProjectBudgetSummary);
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
      reset($this->ProjectBudgetSummary);
    }

    /**
     * Countable implementation
     *
     * @return ProjectBudgetSummary Return count of elements
     */
    public function count()
    {
      return count($this->ProjectBudgetSummary);
    }

}
