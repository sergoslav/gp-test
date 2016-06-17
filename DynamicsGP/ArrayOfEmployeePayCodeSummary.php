<?php

class ArrayOfEmployeePayCodeSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EmployeePayCodeSummary[] $EmployeePayCodeSummary
     */
    protected $EmployeePayCodeSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EmployeePayCodeSummary[]
     */
    public function getEmployeePayCodeSummary()
    {
      return $this->EmployeePayCodeSummary;
    }

    /**
     * @param EmployeePayCodeSummary[] $EmployeePayCodeSummary
     * @return ArrayOfEmployeePayCodeSummary
     */
    public function setEmployeePayCodeSummary(array $EmployeePayCodeSummary = null)
    {
      $this->EmployeePayCodeSummary = $EmployeePayCodeSummary;
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
      return isset($this->EmployeePayCodeSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EmployeePayCodeSummary
     */
    public function offsetGet($offset)
    {
      return $this->EmployeePayCodeSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EmployeePayCodeSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->EmployeePayCodeSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->EmployeePayCodeSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EmployeePayCodeSummary Return the current element
     */
    public function current()
    {
      return current($this->EmployeePayCodeSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->EmployeePayCodeSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->EmployeePayCodeSummary);
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
      reset($this->EmployeePayCodeSummary);
    }

    /**
     * Countable implementation
     *
     * @return EmployeePayCodeSummary Return count of elements
     */
    public function count()
    {
      return count($this->EmployeePayCodeSummary);
    }

}
