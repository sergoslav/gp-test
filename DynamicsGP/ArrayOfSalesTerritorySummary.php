<?php

class ArrayOfSalesTerritorySummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesTerritorySummary[] $SalesTerritorySummary
     */
    protected $SalesTerritorySummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesTerritorySummary[]
     */
    public function getSalesTerritorySummary()
    {
      return $this->SalesTerritorySummary;
    }

    /**
     * @param SalesTerritorySummary[] $SalesTerritorySummary
     * @return ArrayOfSalesTerritorySummary
     */
    public function setSalesTerritorySummary(array $SalesTerritorySummary = null)
    {
      $this->SalesTerritorySummary = $SalesTerritorySummary;
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
      return isset($this->SalesTerritorySummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesTerritorySummary
     */
    public function offsetGet($offset)
    {
      return $this->SalesTerritorySummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesTerritorySummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesTerritorySummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesTerritorySummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesTerritorySummary Return the current element
     */
    public function current()
    {
      return current($this->SalesTerritorySummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesTerritorySummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesTerritorySummary);
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
      reset($this->SalesTerritorySummary);
    }

    /**
     * Countable implementation
     *
     * @return SalesTerritorySummary Return count of elements
     */
    public function count()
    {
      return count($this->SalesTerritorySummary);
    }

}
