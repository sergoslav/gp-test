<?php

class ArrayOfEmployeeAddress implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EmployeeAddress[] $EmployeeAddress
     */
    protected $EmployeeAddress = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EmployeeAddress[]
     */
    public function getEmployeeAddress()
    {
      return $this->EmployeeAddress;
    }

    /**
     * @param EmployeeAddress[] $EmployeeAddress
     * @return ArrayOfEmployeeAddress
     */
    public function setEmployeeAddress(array $EmployeeAddress = null)
    {
      $this->EmployeeAddress = $EmployeeAddress;
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
      return isset($this->EmployeeAddress[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EmployeeAddress
     */
    public function offsetGet($offset)
    {
      return $this->EmployeeAddress[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EmployeeAddress $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->EmployeeAddress[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->EmployeeAddress[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EmployeeAddress Return the current element
     */
    public function current()
    {
      return current($this->EmployeeAddress);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->EmployeeAddress);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->EmployeeAddress);
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
      reset($this->EmployeeAddress);
    }

    /**
     * Countable implementation
     *
     * @return EmployeeAddress Return count of elements
     */
    public function count()
    {
      return count($this->EmployeeAddress);
    }

}
