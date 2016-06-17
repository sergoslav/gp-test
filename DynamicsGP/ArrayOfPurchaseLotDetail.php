<?php

class ArrayOfPurchaseLotDetail implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PurchaseLotDetail[] $PurchaseLotDetail
     */
    protected $PurchaseLotDetail = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PurchaseLotDetail[]
     */
    public function getPurchaseLotDetail()
    {
      return $this->PurchaseLotDetail;
    }

    /**
     * @param PurchaseLotDetail[] $PurchaseLotDetail
     * @return ArrayOfPurchaseLotDetail
     */
    public function setPurchaseLotDetail(array $PurchaseLotDetail = null)
    {
      $this->PurchaseLotDetail = $PurchaseLotDetail;
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
      return isset($this->PurchaseLotDetail[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PurchaseLotDetail
     */
    public function offsetGet($offset)
    {
      return $this->PurchaseLotDetail[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PurchaseLotDetail $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PurchaseLotDetail[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PurchaseLotDetail[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PurchaseLotDetail Return the current element
     */
    public function current()
    {
      return current($this->PurchaseLotDetail);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PurchaseLotDetail);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PurchaseLotDetail);
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
      reset($this->PurchaseLotDetail);
    }

    /**
     * Countable implementation
     *
     * @return PurchaseLotDetail Return count of elements
     */
    public function count()
    {
      return count($this->PurchaseLotDetail);
    }

}
