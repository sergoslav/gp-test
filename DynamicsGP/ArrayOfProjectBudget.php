<?php

class ArrayOfProjectBudget implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProjectBudget[] $ProjectBudget
     */
    protected $ProjectBudget = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectBudget[]
     */
    public function getProjectBudget()
    {
      return $this->ProjectBudget;
    }

    /**
     * @param ProjectBudget[] $ProjectBudget
     * @return ArrayOfProjectBudget
     */
    public function setProjectBudget(array $ProjectBudget = null)
    {
      $this->ProjectBudget = $ProjectBudget;
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
      return isset($this->ProjectBudget[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProjectBudget
     */
    public function offsetGet($offset)
    {
      return $this->ProjectBudget[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProjectBudget $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProjectBudget[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProjectBudget[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProjectBudget Return the current element
     */
    public function current()
    {
      return current($this->ProjectBudget);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProjectBudget);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProjectBudget);
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
      reset($this->ProjectBudget);
    }

    /**
     * Countable implementation
     *
     * @return ProjectBudget Return count of elements
     */
    public function count()
    {
      return count($this->ProjectBudget);
    }

}
