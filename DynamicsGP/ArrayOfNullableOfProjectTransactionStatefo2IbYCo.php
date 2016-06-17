<?php

class ArrayOfNullableOfProjectTransactionStatefo2IbYCo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProjectTransactionState[] $ProjectTransactionState
     */
    protected $ProjectTransactionState = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectTransactionState[]
     */
    public function getProjectTransactionState()
    {
      return $this->ProjectTransactionState;
    }

    /**
     * @param ProjectTransactionState[] $ProjectTransactionState
     * @return ArrayOfNullableOfProjectTransactionStatefo2IbYCo
     */
    public function setProjectTransactionState(array $ProjectTransactionState = null)
    {
      $this->ProjectTransactionState = $ProjectTransactionState;
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
      return isset($this->ProjectTransactionState[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProjectTransactionState
     */
    public function offsetGet($offset)
    {
      return $this->ProjectTransactionState[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProjectTransactionState $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProjectTransactionState[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProjectTransactionState[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProjectTransactionState Return the current element
     */
    public function current()
    {
      return current($this->ProjectTransactionState);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProjectTransactionState);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProjectTransactionState);
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
      reset($this->ProjectTransactionState);
    }

    /**
     * Countable implementation
     *
     * @return ProjectTransactionState Return count of elements
     */
    public function count()
    {
      return count($this->ProjectTransactionState);
    }

}
