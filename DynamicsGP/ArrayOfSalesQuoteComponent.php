<?php

class ArrayOfSalesQuoteComponent implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesQuoteComponent[] $SalesQuoteComponent
     */
    protected $SalesQuoteComponent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesQuoteComponent[]
     */
    public function getSalesQuoteComponent()
    {
      return $this->SalesQuoteComponent;
    }

    /**
     * @param SalesQuoteComponent[] $SalesQuoteComponent
     * @return ArrayOfSalesQuoteComponent
     */
    public function setSalesQuoteComponent(array $SalesQuoteComponent = null)
    {
      $this->SalesQuoteComponent = $SalesQuoteComponent;
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
      return isset($this->SalesQuoteComponent[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesQuoteComponent
     */
    public function offsetGet($offset)
    {
      return $this->SalesQuoteComponent[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesQuoteComponent $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesQuoteComponent[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesQuoteComponent[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesQuoteComponent Return the current element
     */
    public function current()
    {
      return current($this->SalesQuoteComponent);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesQuoteComponent);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesQuoteComponent);
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
      reset($this->SalesQuoteComponent);
    }

    /**
     * Countable implementation
     *
     * @return SalesQuoteComponent Return count of elements
     */
    public function count()
    {
      return count($this->SalesQuoteComponent);
    }

}
