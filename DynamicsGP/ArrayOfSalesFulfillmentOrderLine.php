<?php

class ArrayOfSalesFulfillmentOrderLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesFulfillmentOrderLine[] $SalesFulfillmentOrderLine
     */
    protected $SalesFulfillmentOrderLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesFulfillmentOrderLine[]
     */
    public function getSalesFulfillmentOrderLine()
    {
      return $this->SalesFulfillmentOrderLine;
    }

    /**
     * @param SalesFulfillmentOrderLine[] $SalesFulfillmentOrderLine
     * @return ArrayOfSalesFulfillmentOrderLine
     */
    public function setSalesFulfillmentOrderLine(array $SalesFulfillmentOrderLine = null)
    {
      $this->SalesFulfillmentOrderLine = $SalesFulfillmentOrderLine;
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
      return isset($this->SalesFulfillmentOrderLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesFulfillmentOrderLine
     */
    public function offsetGet($offset)
    {
      return $this->SalesFulfillmentOrderLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesFulfillmentOrderLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesFulfillmentOrderLine[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesFulfillmentOrderLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesFulfillmentOrderLine Return the current element
     */
    public function current()
    {
      return current($this->SalesFulfillmentOrderLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesFulfillmentOrderLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesFulfillmentOrderLine);
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
      reset($this->SalesFulfillmentOrderLine);
    }

    /**
     * Countable implementation
     *
     * @return SalesFulfillmentOrderLine Return count of elements
     */
    public function count()
    {
      return count($this->SalesFulfillmentOrderLine);
    }

}
