<?php

class ArrayOfSalesOrderComponent implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesOrderComponent[] $SalesOrderComponent
     */
    protected $SalesOrderComponent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesOrderComponent[]
     */
    public function getSalesOrderComponent()
    {
      return $this->SalesOrderComponent;
    }

    /**
     * @param SalesOrderComponent[] $SalesOrderComponent
     * @return ArrayOfSalesOrderComponent
     */
    public function setSalesOrderComponent(array $SalesOrderComponent = null)
    {
      $this->SalesOrderComponent = $SalesOrderComponent;
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
      return isset($this->SalesOrderComponent[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesOrderComponent
     */
    public function offsetGet($offset)
    {
      return $this->SalesOrderComponent[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesOrderComponent $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesOrderComponent[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesOrderComponent[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesOrderComponent Return the current element
     */
    public function current()
    {
      return current($this->SalesOrderComponent);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesOrderComponent);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesOrderComponent);
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
      reset($this->SalesOrderComponent);
    }

    /**
     * Countable implementation
     *
     * @return SalesOrderComponent Return count of elements
     */
    public function count()
    {
      return count($this->SalesOrderComponent);
    }

}
