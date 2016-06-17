<?php

class ArrayOfPurchaseTax implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PurchaseTax[] $PurchaseTax
     */
    protected $PurchaseTax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PurchaseTax[]
     */
    public function getPurchaseTax()
    {
      return $this->PurchaseTax;
    }

    /**
     * @param PurchaseTax[] $PurchaseTax
     * @return ArrayOfPurchaseTax
     */
    public function setPurchaseTax(array $PurchaseTax = null)
    {
      $this->PurchaseTax = $PurchaseTax;
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
      return isset($this->PurchaseTax[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PurchaseTax
     */
    public function offsetGet($offset)
    {
      return $this->PurchaseTax[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PurchaseTax $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PurchaseTax[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PurchaseTax[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PurchaseTax Return the current element
     */
    public function current()
    {
      return current($this->PurchaseTax);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PurchaseTax);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PurchaseTax);
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
      reset($this->PurchaseTax);
    }

    /**
     * Countable implementation
     *
     * @return PurchaseTax Return count of elements
     */
    public function count()
    {
      return count($this->PurchaseTax);
    }

}
