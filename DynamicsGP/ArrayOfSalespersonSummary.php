<?php

class ArrayOfSalespersonSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalespersonSummary[] $SalespersonSummary
     */
    protected $SalespersonSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalespersonSummary[]
     */
    public function getSalespersonSummary()
    {
      return $this->SalespersonSummary;
    }

    /**
     * @param SalespersonSummary[] $SalespersonSummary
     * @return ArrayOfSalespersonSummary
     */
    public function setSalespersonSummary(array $SalespersonSummary = null)
    {
      $this->SalespersonSummary = $SalespersonSummary;
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
      return isset($this->SalespersonSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalespersonSummary
     */
    public function offsetGet($offset)
    {
      return $this->SalespersonSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalespersonSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalespersonSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalespersonSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalespersonSummary Return the current element
     */
    public function current()
    {
      return current($this->SalespersonSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalespersonSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalespersonSummary);
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
      reset($this->SalespersonSummary);
    }

    /**
     * Countable implementation
     *
     * @return SalespersonSummary Return count of elements
     */
    public function count()
    {
      return count($this->SalespersonSummary);
    }

}
