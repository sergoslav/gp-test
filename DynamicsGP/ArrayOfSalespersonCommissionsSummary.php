<?php

class ArrayOfSalespersonCommissionsSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalespersonCommissionsSummary[] $SalespersonCommissionsSummary
     */
    protected $SalespersonCommissionsSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalespersonCommissionsSummary[]
     */
    public function getSalespersonCommissionsSummary()
    {
      return $this->SalespersonCommissionsSummary;
    }

    /**
     * @param SalespersonCommissionsSummary[] $SalespersonCommissionsSummary
     * @return ArrayOfSalespersonCommissionsSummary
     */
    public function setSalespersonCommissionsSummary(array $SalespersonCommissionsSummary = null)
    {
      $this->SalespersonCommissionsSummary = $SalespersonCommissionsSummary;
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
      return isset($this->SalespersonCommissionsSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalespersonCommissionsSummary
     */
    public function offsetGet($offset)
    {
      return $this->SalespersonCommissionsSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalespersonCommissionsSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalespersonCommissionsSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalespersonCommissionsSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalespersonCommissionsSummary Return the current element
     */
    public function current()
    {
      return current($this->SalespersonCommissionsSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalespersonCommissionsSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalespersonCommissionsSummary);
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
      reset($this->SalespersonCommissionsSummary);
    }

    /**
     * Countable implementation
     *
     * @return SalespersonCommissionsSummary Return count of elements
     */
    public function count()
    {
      return count($this->SalespersonCommissionsSummary);
    }

}
