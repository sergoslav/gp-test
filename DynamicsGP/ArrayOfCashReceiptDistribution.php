<?php

class ArrayOfCashReceiptDistribution implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CashReceiptDistribution[] $CashReceiptDistribution
     */
    protected $CashReceiptDistribution = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CashReceiptDistribution[]
     */
    public function getCashReceiptDistribution()
    {
      return $this->CashReceiptDistribution;
    }

    /**
     * @param CashReceiptDistribution[] $CashReceiptDistribution
     * @return ArrayOfCashReceiptDistribution
     */
    public function setCashReceiptDistribution(array $CashReceiptDistribution = null)
    {
      $this->CashReceiptDistribution = $CashReceiptDistribution;
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
      return isset($this->CashReceiptDistribution[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CashReceiptDistribution
     */
    public function offsetGet($offset)
    {
      return $this->CashReceiptDistribution[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CashReceiptDistribution $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CashReceiptDistribution[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CashReceiptDistribution[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CashReceiptDistribution Return the current element
     */
    public function current()
    {
      return current($this->CashReceiptDistribution);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CashReceiptDistribution);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CashReceiptDistribution);
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
      reset($this->CashReceiptDistribution);
    }

    /**
     * Countable implementation
     *
     * @return CashReceiptDistribution Return count of elements
     */
    public function count()
    {
      return count($this->CashReceiptDistribution);
    }

}
