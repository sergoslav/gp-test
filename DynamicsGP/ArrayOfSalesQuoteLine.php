<?php

class ArrayOfSalesQuoteLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesQuoteLine[] $SalesQuoteLine
     */
    protected $SalesQuoteLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesQuoteLine[]
     */
    public function getSalesQuoteLine()
    {
      return $this->SalesQuoteLine;
    }

    /**
     * @param SalesQuoteLine[] $SalesQuoteLine
     * @return ArrayOfSalesQuoteLine
     */
    public function setSalesQuoteLine(array $SalesQuoteLine = null)
    {
      $this->SalesQuoteLine = $SalesQuoteLine;
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
      return isset($this->SalesQuoteLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesQuoteLine
     */
    public function offsetGet($offset)
    {
      return $this->SalesQuoteLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesQuoteLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesQuoteLine[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesQuoteLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesQuoteLine Return the current element
     */
    public function current()
    {
      return current($this->SalesQuoteLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesQuoteLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesQuoteLine);
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
      reset($this->SalesQuoteLine);
    }

    /**
     * Countable implementation
     *
     * @return SalesQuoteLine Return count of elements
     */
    public function count()
    {
      return count($this->SalesQuoteLine);
    }

}
