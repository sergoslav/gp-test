<?php

class ArrayOfChangedSalesInvoiceKey implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ChangedSalesInvoiceKey[] $ChangedSalesInvoiceKey
     */
    protected $ChangedSalesInvoiceKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ChangedSalesInvoiceKey[]
     */
    public function getChangedSalesInvoiceKey()
    {
      return $this->ChangedSalesInvoiceKey;
    }

    /**
     * @param ChangedSalesInvoiceKey[] $ChangedSalesInvoiceKey
     * @return ArrayOfChangedSalesInvoiceKey
     */
    public function setChangedSalesInvoiceKey(array $ChangedSalesInvoiceKey = null)
    {
      $this->ChangedSalesInvoiceKey = $ChangedSalesInvoiceKey;
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
      return isset($this->ChangedSalesInvoiceKey[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ChangedSalesInvoiceKey
     */
    public function offsetGet($offset)
    {
      return $this->ChangedSalesInvoiceKey[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ChangedSalesInvoiceKey $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ChangedSalesInvoiceKey[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ChangedSalesInvoiceKey[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ChangedSalesInvoiceKey Return the current element
     */
    public function current()
    {
      return current($this->ChangedSalesInvoiceKey);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ChangedSalesInvoiceKey);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ChangedSalesInvoiceKey);
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
      reset($this->ChangedSalesInvoiceKey);
    }

    /**
     * Countable implementation
     *
     * @return ChangedSalesInvoiceKey Return count of elements
     */
    public function count()
    {
      return count($this->ChangedSalesInvoiceKey);
    }

}
