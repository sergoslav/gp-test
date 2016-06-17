<?php

class ArrayOfNullableOfInventoryTransactionStatefo2IbYCo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var InventoryTransactionState[] $InventoryTransactionState
     */
    protected $InventoryTransactionState = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InventoryTransactionState[]
     */
    public function getInventoryTransactionState()
    {
      return $this->InventoryTransactionState;
    }

    /**
     * @param InventoryTransactionState[] $InventoryTransactionState
     * @return ArrayOfNullableOfInventoryTransactionStatefo2IbYCo
     */
    public function setInventoryTransactionState(array $InventoryTransactionState = null)
    {
      $this->InventoryTransactionState = $InventoryTransactionState;
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
      return isset($this->InventoryTransactionState[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return InventoryTransactionState
     */
    public function offsetGet($offset)
    {
      return $this->InventoryTransactionState[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param InventoryTransactionState $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->InventoryTransactionState[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->InventoryTransactionState[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return InventoryTransactionState Return the current element
     */
    public function current()
    {
      return current($this->InventoryTransactionState);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->InventoryTransactionState);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->InventoryTransactionState);
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
      reset($this->InventoryTransactionState);
    }

    /**
     * Countable implementation
     *
     * @return InventoryTransactionState Return count of elements
     */
    public function count()
    {
      return count($this->InventoryTransactionState);
    }

}
