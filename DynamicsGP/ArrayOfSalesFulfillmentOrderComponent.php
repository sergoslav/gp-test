<?php

class ArrayOfSalesFulfillmentOrderComponent implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesFulfillmentOrderComponent[] $SalesFulfillmentOrderComponent
     */
    protected $SalesFulfillmentOrderComponent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesFulfillmentOrderComponent[]
     */
    public function getSalesFulfillmentOrderComponent()
    {
      return $this->SalesFulfillmentOrderComponent;
    }

    /**
     * @param SalesFulfillmentOrderComponent[] $SalesFulfillmentOrderComponent
     * @return ArrayOfSalesFulfillmentOrderComponent
     */
    public function setSalesFulfillmentOrderComponent(array $SalesFulfillmentOrderComponent = null)
    {
      $this->SalesFulfillmentOrderComponent = $SalesFulfillmentOrderComponent;
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
      return isset($this->SalesFulfillmentOrderComponent[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesFulfillmentOrderComponent
     */
    public function offsetGet($offset)
    {
      return $this->SalesFulfillmentOrderComponent[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesFulfillmentOrderComponent $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesFulfillmentOrderComponent[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesFulfillmentOrderComponent[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesFulfillmentOrderComponent Return the current element
     */
    public function current()
    {
      return current($this->SalesFulfillmentOrderComponent);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesFulfillmentOrderComponent);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesFulfillmentOrderComponent);
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
      reset($this->SalesFulfillmentOrderComponent);
    }

    /**
     * Countable implementation
     *
     * @return SalesFulfillmentOrderComponent Return count of elements
     */
    public function count()
    {
      return count($this->SalesFulfillmentOrderComponent);
    }

}
