<?php

class ArrayOfNullableOfSalesCommissionTransactionStatefo2IbYCo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesCommissionTransactionState[] $SalesCommissionTransactionState
     */
    protected $SalesCommissionTransactionState = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesCommissionTransactionState[]
     */
    public function getSalesCommissionTransactionState()
    {
      return $this->SalesCommissionTransactionState;
    }

    /**
     * @param SalesCommissionTransactionState[] $SalesCommissionTransactionState
     * @return ArrayOfNullableOfSalesCommissionTransactionStatefo2IbYCo
     */
    public function setSalesCommissionTransactionState(array $SalesCommissionTransactionState = null)
    {
      $this->SalesCommissionTransactionState = $SalesCommissionTransactionState;
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
      return isset($this->SalesCommissionTransactionState[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesCommissionTransactionState
     */
    public function offsetGet($offset)
    {
      return $this->SalesCommissionTransactionState[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesCommissionTransactionState $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesCommissionTransactionState[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesCommissionTransactionState[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesCommissionTransactionState Return the current element
     */
    public function current()
    {
      return current($this->SalesCommissionTransactionState);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesCommissionTransactionState);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesCommissionTransactionState);
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
      reset($this->SalesCommissionTransactionState);
    }

    /**
     * Countable implementation
     *
     * @return SalesCommissionTransactionState Return count of elements
     */
    public function count()
    {
      return count($this->SalesCommissionTransactionState);
    }

}
