<?php

class ArrayOfNullableOfServiceTransactionStatefo2IbYCo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ServiceTransactionState[] $ServiceTransactionState
     */
    protected $ServiceTransactionState = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceTransactionState[]
     */
    public function getServiceTransactionState()
    {
      return $this->ServiceTransactionState;
    }

    /**
     * @param ServiceTransactionState[] $ServiceTransactionState
     * @return ArrayOfNullableOfServiceTransactionStatefo2IbYCo
     */
    public function setServiceTransactionState(array $ServiceTransactionState = null)
    {
      $this->ServiceTransactionState = $ServiceTransactionState;
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
      return isset($this->ServiceTransactionState[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ServiceTransactionState
     */
    public function offsetGet($offset)
    {
      return $this->ServiceTransactionState[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ServiceTransactionState $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ServiceTransactionState[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ServiceTransactionState[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ServiceTransactionState Return the current element
     */
    public function current()
    {
      return current($this->ServiceTransactionState);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServiceTransactionState);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServiceTransactionState);
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
      reset($this->ServiceTransactionState);
    }

    /**
     * Countable implementation
     *
     * @return ServiceTransactionState Return count of elements
     */
    public function count()
    {
      return count($this->ServiceTransactionState);
    }

}
