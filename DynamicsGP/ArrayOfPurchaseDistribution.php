<?php

class ArrayOfPurchaseDistribution implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PurchaseDistribution[] $PurchaseDistribution
     */
    protected $PurchaseDistribution = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PurchaseDistribution[]
     */
    public function getPurchaseDistribution()
    {
      return $this->PurchaseDistribution;
    }

    /**
     * @param PurchaseDistribution[] $PurchaseDistribution
     * @return ArrayOfPurchaseDistribution
     */
    public function setPurchaseDistribution(array $PurchaseDistribution = null)
    {
      $this->PurchaseDistribution = $PurchaseDistribution;
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
      return isset($this->PurchaseDistribution[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PurchaseDistribution
     */
    public function offsetGet($offset)
    {
      return $this->PurchaseDistribution[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PurchaseDistribution $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PurchaseDistribution[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PurchaseDistribution[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PurchaseDistribution Return the current element
     */
    public function current()
    {
      return current($this->PurchaseDistribution);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PurchaseDistribution);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PurchaseDistribution);
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
      reset($this->PurchaseDistribution);
    }

    /**
     * Countable implementation
     *
     * @return PurchaseDistribution Return count of elements
     */
    public function count()
    {
      return count($this->PurchaseDistribution);
    }

}
