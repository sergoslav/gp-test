<?php

class ArrayOfNullableOfReceivablesTransactionStatefo2IbYCo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ReceivablesTransactionState[] $ReceivablesTransactionState
     */
    protected $ReceivablesTransactionState = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReceivablesTransactionState[]
     */
    public function getReceivablesTransactionState()
    {
      return $this->ReceivablesTransactionState;
    }

    /**
     * @param ReceivablesTransactionState[] $ReceivablesTransactionState
     * @return ArrayOfNullableOfReceivablesTransactionStatefo2IbYCo
     */
    public function setReceivablesTransactionState(array $ReceivablesTransactionState = null)
    {
      $this->ReceivablesTransactionState = $ReceivablesTransactionState;
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
      return isset($this->ReceivablesTransactionState[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ReceivablesTransactionState
     */
    public function offsetGet($offset)
    {
      return $this->ReceivablesTransactionState[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ReceivablesTransactionState $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ReceivablesTransactionState[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ReceivablesTransactionState[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ReceivablesTransactionState Return the current element
     */
    public function current()
    {
      return current($this->ReceivablesTransactionState);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ReceivablesTransactionState);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ReceivablesTransactionState);
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
      reset($this->ReceivablesTransactionState);
    }

    /**
     * Countable implementation
     *
     * @return ReceivablesTransactionState Return count of elements
     */
    public function count()
    {
      return count($this->ReceivablesTransactionState);
    }

}
