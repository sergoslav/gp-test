<?php

class ArrayOfPayablesInvoiceSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PayablesInvoiceSummary[] $PayablesInvoiceSummary
     */
    protected $PayablesInvoiceSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PayablesInvoiceSummary[]
     */
    public function getPayablesInvoiceSummary()
    {
      return $this->PayablesInvoiceSummary;
    }

    /**
     * @param PayablesInvoiceSummary[] $PayablesInvoiceSummary
     * @return ArrayOfPayablesInvoiceSummary
     */
    public function setPayablesInvoiceSummary(array $PayablesInvoiceSummary = null)
    {
      $this->PayablesInvoiceSummary = $PayablesInvoiceSummary;
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
      return isset($this->PayablesInvoiceSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PayablesInvoiceSummary
     */
    public function offsetGet($offset)
    {
      return $this->PayablesInvoiceSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PayablesInvoiceSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PayablesInvoiceSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PayablesInvoiceSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PayablesInvoiceSummary Return the current element
     */
    public function current()
    {
      return current($this->PayablesInvoiceSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PayablesInvoiceSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PayablesInvoiceSummary);
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
      reset($this->PayablesInvoiceSummary);
    }

    /**
     * Countable implementation
     *
     * @return PayablesInvoiceSummary Return count of elements
     */
    public function count()
    {
      return count($this->PayablesInvoiceSummary);
    }

}
