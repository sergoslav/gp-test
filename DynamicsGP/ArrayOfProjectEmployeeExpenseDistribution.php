<?php

class ArrayOfProjectEmployeeExpenseDistribution implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProjectEmployeeExpenseDistribution[] $ProjectEmployeeExpenseDistribution
     */
    protected $ProjectEmployeeExpenseDistribution = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectEmployeeExpenseDistribution[]
     */
    public function getProjectEmployeeExpenseDistribution()
    {
      return $this->ProjectEmployeeExpenseDistribution;
    }

    /**
     * @param ProjectEmployeeExpenseDistribution[] $ProjectEmployeeExpenseDistribution
     * @return ArrayOfProjectEmployeeExpenseDistribution
     */
    public function setProjectEmployeeExpenseDistribution(array $ProjectEmployeeExpenseDistribution = null)
    {
      $this->ProjectEmployeeExpenseDistribution = $ProjectEmployeeExpenseDistribution;
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
      return isset($this->ProjectEmployeeExpenseDistribution[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProjectEmployeeExpenseDistribution
     */
    public function offsetGet($offset)
    {
      return $this->ProjectEmployeeExpenseDistribution[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProjectEmployeeExpenseDistribution $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProjectEmployeeExpenseDistribution[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProjectEmployeeExpenseDistribution[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProjectEmployeeExpenseDistribution Return the current element
     */
    public function current()
    {
      return current($this->ProjectEmployeeExpenseDistribution);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProjectEmployeeExpenseDistribution);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProjectEmployeeExpenseDistribution);
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
      reset($this->ProjectEmployeeExpenseDistribution);
    }

    /**
     * Countable implementation
     *
     * @return ProjectEmployeeExpenseDistribution Return count of elements
     */
    public function count()
    {
      return count($this->ProjectEmployeeExpenseDistribution);
    }

}
