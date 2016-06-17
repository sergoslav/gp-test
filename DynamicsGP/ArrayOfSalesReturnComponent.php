<?php

class ArrayOfSalesReturnComponent implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesReturnComponent[] $SalesReturnComponent
     */
    protected $SalesReturnComponent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesReturnComponent[]
     */
    public function getSalesReturnComponent()
    {
      return $this->SalesReturnComponent;
    }

    /**
     * @param SalesReturnComponent[] $SalesReturnComponent
     * @return ArrayOfSalesReturnComponent
     */
    public function setSalesReturnComponent(array $SalesReturnComponent = null)
    {
      $this->SalesReturnComponent = $SalesReturnComponent;
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
      return isset($this->SalesReturnComponent[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesReturnComponent
     */
    public function offsetGet($offset)
    {
      return $this->SalesReturnComponent[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesReturnComponent $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesReturnComponent[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesReturnComponent[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesReturnComponent Return the current element
     */
    public function current()
    {
      return current($this->SalesReturnComponent);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesReturnComponent);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesReturnComponent);
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
      reset($this->SalesReturnComponent);
    }

    /**
     * Countable implementation
     *
     * @return SalesReturnComponent Return count of elements
     */
    public function count()
    {
      return count($this->SalesReturnComponent);
    }

}
