<?php

class ArrayOfSalesFulfillmentOrderSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesFulfillmentOrderSummary[] $SalesFulfillmentOrderSummary
     */
    protected $SalesFulfillmentOrderSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesFulfillmentOrderSummary[]
     */
    public function getSalesFulfillmentOrderSummary()
    {
      return $this->SalesFulfillmentOrderSummary;
    }

    /**
     * @param SalesFulfillmentOrderSummary[] $SalesFulfillmentOrderSummary
     * @return ArrayOfSalesFulfillmentOrderSummary
     */
    public function setSalesFulfillmentOrderSummary(array $SalesFulfillmentOrderSummary = null)
    {
      $this->SalesFulfillmentOrderSummary = $SalesFulfillmentOrderSummary;
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
      return isset($this->SalesFulfillmentOrderSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesFulfillmentOrderSummary
     */
    public function offsetGet($offset)
    {
      return $this->SalesFulfillmentOrderSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesFulfillmentOrderSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesFulfillmentOrderSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesFulfillmentOrderSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesFulfillmentOrderSummary Return the current element
     */
    public function current()
    {
      return current($this->SalesFulfillmentOrderSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesFulfillmentOrderSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesFulfillmentOrderSummary);
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
      reset($this->SalesFulfillmentOrderSummary);
    }

    /**
     * Countable implementation
     *
     * @return SalesFulfillmentOrderSummary Return count of elements
     */
    public function count()
    {
      return count($this->SalesFulfillmentOrderSummary);
    }

}
