<?php

class ArrayOfReceivablesInvoiceSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ReceivablesInvoiceSummary[] $ReceivablesInvoiceSummary
     */
    protected $ReceivablesInvoiceSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReceivablesInvoiceSummary[]
     */
    public function getReceivablesInvoiceSummary()
    {
      return $this->ReceivablesInvoiceSummary;
    }

    /**
     * @param ReceivablesInvoiceSummary[] $ReceivablesInvoiceSummary
     * @return ArrayOfReceivablesInvoiceSummary
     */
    public function setReceivablesInvoiceSummary(array $ReceivablesInvoiceSummary = null)
    {
      $this->ReceivablesInvoiceSummary = $ReceivablesInvoiceSummary;
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
      return isset($this->ReceivablesInvoiceSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ReceivablesInvoiceSummary
     */
    public function offsetGet($offset)
    {
      return $this->ReceivablesInvoiceSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ReceivablesInvoiceSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ReceivablesInvoiceSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ReceivablesInvoiceSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ReceivablesInvoiceSummary Return the current element
     */
    public function current()
    {
      return current($this->ReceivablesInvoiceSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ReceivablesInvoiceSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ReceivablesInvoiceSummary);
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
      reset($this->ReceivablesInvoiceSummary);
    }

    /**
     * Countable implementation
     *
     * @return ReceivablesInvoiceSummary Return count of elements
     */
    public function count()
    {
      return count($this->ReceivablesInvoiceSummary);
    }

}
