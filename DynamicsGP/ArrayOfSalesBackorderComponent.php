<?php

class ArrayOfSalesBackorderComponent implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesBackorderComponent[] $SalesBackorderComponent
     */
    protected $SalesBackorderComponent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesBackorderComponent[]
     */
    public function getSalesBackorderComponent()
    {
      return $this->SalesBackorderComponent;
    }

    /**
     * @param SalesBackorderComponent[] $SalesBackorderComponent
     * @return ArrayOfSalesBackorderComponent
     */
    public function setSalesBackorderComponent(array $SalesBackorderComponent = null)
    {
      $this->SalesBackorderComponent = $SalesBackorderComponent;
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
      return isset($this->SalesBackorderComponent[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesBackorderComponent
     */
    public function offsetGet($offset)
    {
      return $this->SalesBackorderComponent[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesBackorderComponent $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesBackorderComponent[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesBackorderComponent[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesBackorderComponent Return the current element
     */
    public function current()
    {
      return current($this->SalesBackorderComponent);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesBackorderComponent);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesBackorderComponent);
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
      reset($this->SalesBackorderComponent);
    }

    /**
     * Countable implementation
     *
     * @return SalesBackorderComponent Return count of elements
     */
    public function count()
    {
      return count($this->SalesBackorderComponent);
    }

}
