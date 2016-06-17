<?php

class ArrayOfNullableOfSalesTransactionStatefo2IbYCo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesTransactionState[] $SalesTransactionState
     */
    protected $SalesTransactionState = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesTransactionState[]
     */
    public function getSalesTransactionState()
    {
      return $this->SalesTransactionState;
    }

    /**
     * @param SalesTransactionState[] $SalesTransactionState
     * @return ArrayOfNullableOfSalesTransactionStatefo2IbYCo
     */
    public function setSalesTransactionState(array $SalesTransactionState = null)
    {
      $this->SalesTransactionState = $SalesTransactionState;
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
      return isset($this->SalesTransactionState[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesTransactionState
     */
    public function offsetGet($offset)
    {
      return $this->SalesTransactionState[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesTransactionState $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesTransactionState[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesTransactionState[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesTransactionState Return the current element
     */
    public function current()
    {
      return current($this->SalesTransactionState);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesTransactionState);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesTransactionState);
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
      reset($this->SalesTransactionState);
    }

    /**
     * Countable implementation
     *
     * @return SalesTransactionState Return count of elements
     */
    public function count()
    {
      return count($this->SalesTransactionState);
    }

}
