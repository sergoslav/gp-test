<?php

class ArrayOfEmployeeAddressSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EmployeeAddressSummary[] $EmployeeAddressSummary
     */
    protected $EmployeeAddressSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EmployeeAddressSummary[]
     */
    public function getEmployeeAddressSummary()
    {
      return $this->EmployeeAddressSummary;
    }

    /**
     * @param EmployeeAddressSummary[] $EmployeeAddressSummary
     * @return ArrayOfEmployeeAddressSummary
     */
    public function setEmployeeAddressSummary(array $EmployeeAddressSummary = null)
    {
      $this->EmployeeAddressSummary = $EmployeeAddressSummary;
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
      return isset($this->EmployeeAddressSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EmployeeAddressSummary
     */
    public function offsetGet($offset)
    {
      return $this->EmployeeAddressSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EmployeeAddressSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->EmployeeAddressSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->EmployeeAddressSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EmployeeAddressSummary Return the current element
     */
    public function current()
    {
      return current($this->EmployeeAddressSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->EmployeeAddressSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->EmployeeAddressSummary);
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
      reset($this->EmployeeAddressSummary);
    }

    /**
     * Countable implementation
     *
     * @return EmployeeAddressSummary Return count of elements
     */
    public function count()
    {
      return count($this->EmployeeAddressSummary);
    }

}
