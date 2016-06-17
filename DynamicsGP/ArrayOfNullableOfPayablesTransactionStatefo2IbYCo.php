<?php

class ArrayOfNullableOfPayablesTransactionStatefo2IbYCo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PayablesTransactionState[] $PayablesTransactionState
     */
    protected $PayablesTransactionState = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PayablesTransactionState[]
     */
    public function getPayablesTransactionState()
    {
      return $this->PayablesTransactionState;
    }

    /**
     * @param PayablesTransactionState[] $PayablesTransactionState
     * @return ArrayOfNullableOfPayablesTransactionStatefo2IbYCo
     */
    public function setPayablesTransactionState(array $PayablesTransactionState = null)
    {
      $this->PayablesTransactionState = $PayablesTransactionState;
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
      return isset($this->PayablesTransactionState[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PayablesTransactionState
     */
    public function offsetGet($offset)
    {
      return $this->PayablesTransactionState[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PayablesTransactionState $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PayablesTransactionState[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PayablesTransactionState[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PayablesTransactionState Return the current element
     */
    public function current()
    {
      return current($this->PayablesTransactionState);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PayablesTransactionState);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PayablesTransactionState);
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
      reset($this->PayablesTransactionState);
    }

    /**
     * Countable implementation
     *
     * @return PayablesTransactionState Return count of elements
     */
    public function count()
    {
      return count($this->PayablesTransactionState);
    }

}
