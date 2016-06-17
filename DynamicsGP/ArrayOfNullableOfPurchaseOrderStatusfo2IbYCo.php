<?php

class ArrayOfNullableOfPurchaseOrderStatusfo2IbYCo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PurchaseOrderStatus[] $PurchaseOrderStatus
     */
    protected $PurchaseOrderStatus = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PurchaseOrderStatus[]
     */
    public function getPurchaseOrderStatus()
    {
      return $this->PurchaseOrderStatus;
    }

    /**
     * @param PurchaseOrderStatus[] $PurchaseOrderStatus
     * @return ArrayOfNullableOfPurchaseOrderStatusfo2IbYCo
     */
    public function setPurchaseOrderStatus(array $PurchaseOrderStatus = null)
    {
      $this->PurchaseOrderStatus = $PurchaseOrderStatus;
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
      return isset($this->PurchaseOrderStatus[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PurchaseOrderStatus
     */
    public function offsetGet($offset)
    {
      return $this->PurchaseOrderStatus[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PurchaseOrderStatus $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PurchaseOrderStatus[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PurchaseOrderStatus[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PurchaseOrderStatus Return the current element
     */
    public function current()
    {
      return current($this->PurchaseOrderStatus);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PurchaseOrderStatus);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PurchaseOrderStatus);
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
      reset($this->PurchaseOrderStatus);
    }

    /**
     * Countable implementation
     *
     * @return PurchaseOrderStatus Return count of elements
     */
    public function count()
    {
      return count($this->PurchaseOrderStatus);
    }

}
