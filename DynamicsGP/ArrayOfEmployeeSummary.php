<?php

class ArrayOfEmployeeSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EmployeeSummary[] $EmployeeSummary
     */
    protected $EmployeeSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EmployeeSummary[]
     */
    public function getEmployeeSummary()
    {
      return $this->EmployeeSummary;
    }

    /**
     * @param EmployeeSummary[] $EmployeeSummary
     * @return ArrayOfEmployeeSummary
     */
    public function setEmployeeSummary(array $EmployeeSummary = null)
    {
      $this->EmployeeSummary = $EmployeeSummary;
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
      return isset($this->EmployeeSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EmployeeSummary
     */
    public function offsetGet($offset)
    {
      return $this->EmployeeSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EmployeeSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->EmployeeSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->EmployeeSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EmployeeSummary Return the current element
     */
    public function current()
    {
      return current($this->EmployeeSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->EmployeeSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->EmployeeSummary);
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
      reset($this->EmployeeSummary);
    }

    /**
     * Countable implementation
     *
     * @return EmployeeSummary Return count of elements
     */
    public function count()
    {
      return count($this->EmployeeSummary);
    }

}
