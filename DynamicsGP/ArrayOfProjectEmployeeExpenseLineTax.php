<?php

class ArrayOfProjectEmployeeExpenseLineTax implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProjectEmployeeExpenseLineTax[] $ProjectEmployeeExpenseLineTax
     */
    protected $ProjectEmployeeExpenseLineTax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectEmployeeExpenseLineTax[]
     */
    public function getProjectEmployeeExpenseLineTax()
    {
      return $this->ProjectEmployeeExpenseLineTax;
    }

    /**
     * @param ProjectEmployeeExpenseLineTax[] $ProjectEmployeeExpenseLineTax
     * @return ArrayOfProjectEmployeeExpenseLineTax
     */
    public function setProjectEmployeeExpenseLineTax(array $ProjectEmployeeExpenseLineTax = null)
    {
      $this->ProjectEmployeeExpenseLineTax = $ProjectEmployeeExpenseLineTax;
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
      return isset($this->ProjectEmployeeExpenseLineTax[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProjectEmployeeExpenseLineTax
     */
    public function offsetGet($offset)
    {
      return $this->ProjectEmployeeExpenseLineTax[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProjectEmployeeExpenseLineTax $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProjectEmployeeExpenseLineTax[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProjectEmployeeExpenseLineTax[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProjectEmployeeExpenseLineTax Return the current element
     */
    public function current()
    {
      return current($this->ProjectEmployeeExpenseLineTax);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProjectEmployeeExpenseLineTax);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProjectEmployeeExpenseLineTax);
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
      reset($this->ProjectEmployeeExpenseLineTax);
    }

    /**
     * Countable implementation
     *
     * @return ProjectEmployeeExpenseLineTax Return count of elements
     */
    public function count()
    {
      return count($this->ProjectEmployeeExpenseLineTax);
    }

}
