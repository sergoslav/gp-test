<?php

class ArrayOfSalesInvoiceLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesInvoiceLine[] $SalesInvoiceLine
     */
    protected $SalesInvoiceLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesInvoiceLine[]
     */
    public function getSalesInvoiceLine()
    {
      return $this->SalesInvoiceLine;
    }

    /**
     * @param SalesInvoiceLine[] $SalesInvoiceLine
     * @return ArrayOfSalesInvoiceLine
     */
    public function setSalesInvoiceLine(array $SalesInvoiceLine = null)
    {
      $this->SalesInvoiceLine = $SalesInvoiceLine;
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
      return isset($this->SalesInvoiceLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesInvoiceLine
     */
    public function offsetGet($offset)
    {
      return $this->SalesInvoiceLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesInvoiceLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesInvoiceLine[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesInvoiceLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesInvoiceLine Return the current element
     */
    public function current()
    {
      return current($this->SalesInvoiceLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesInvoiceLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesInvoiceLine);
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
      reset($this->SalesInvoiceLine);
    }

    /**
     * Countable implementation
     *
     * @return SalesInvoiceLine Return count of elements
     */
    public function count()
    {
      return count($this->SalesInvoiceLine);
    }

}
