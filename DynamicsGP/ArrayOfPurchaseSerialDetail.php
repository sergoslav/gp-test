<?php

class ArrayOfPurchaseSerialDetail implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PurchaseSerialDetail[] $PurchaseSerialDetail
     */
    protected $PurchaseSerialDetail = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PurchaseSerialDetail[]
     */
    public function getPurchaseSerialDetail()
    {
      return $this->PurchaseSerialDetail;
    }

    /**
     * @param PurchaseSerialDetail[] $PurchaseSerialDetail
     * @return ArrayOfPurchaseSerialDetail
     */
    public function setPurchaseSerialDetail(array $PurchaseSerialDetail = null)
    {
      $this->PurchaseSerialDetail = $PurchaseSerialDetail;
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
      return isset($this->PurchaseSerialDetail[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PurchaseSerialDetail
     */
    public function offsetGet($offset)
    {
      return $this->PurchaseSerialDetail[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PurchaseSerialDetail $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PurchaseSerialDetail[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PurchaseSerialDetail[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PurchaseSerialDetail Return the current element
     */
    public function current()
    {
      return current($this->PurchaseSerialDetail);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PurchaseSerialDetail);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PurchaseSerialDetail);
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
      reset($this->PurchaseSerialDetail);
    }

    /**
     * Countable implementation
     *
     * @return PurchaseSerialDetail Return count of elements
     */
    public function count()
    {
      return count($this->PurchaseSerialDetail);
    }

}
