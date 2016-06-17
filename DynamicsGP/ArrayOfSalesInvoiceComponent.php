<?php

class ArrayOfSalesInvoiceComponent implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesInvoiceComponent[] $SalesInvoiceComponent
     */
    protected $SalesInvoiceComponent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesInvoiceComponent[]
     */
    public function getSalesInvoiceComponent()
    {
      return $this->SalesInvoiceComponent;
    }

    /**
     * @param SalesInvoiceComponent[] $SalesInvoiceComponent
     * @return ArrayOfSalesInvoiceComponent
     */
    public function setSalesInvoiceComponent(array $SalesInvoiceComponent = null)
    {
      $this->SalesInvoiceComponent = $SalesInvoiceComponent;
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
      return isset($this->SalesInvoiceComponent[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesInvoiceComponent
     */
    public function offsetGet($offset)
    {
      return $this->SalesInvoiceComponent[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesInvoiceComponent $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesInvoiceComponent[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesInvoiceComponent[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesInvoiceComponent Return the current element
     */
    public function current()
    {
      return current($this->SalesInvoiceComponent);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesInvoiceComponent);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesInvoiceComponent);
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
      reset($this->SalesInvoiceComponent);
    }

    /**
     * Countable implementation
     *
     * @return SalesInvoiceComponent Return count of elements
     */
    public function count()
    {
      return count($this->SalesInvoiceComponent);
    }

}
