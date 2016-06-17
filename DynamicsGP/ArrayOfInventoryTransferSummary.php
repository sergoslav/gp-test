<?php

class ArrayOfInventoryTransferSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var InventoryTransferSummary[] $InventoryTransferSummary
     */
    protected $InventoryTransferSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InventoryTransferSummary[]
     */
    public function getInventoryTransferSummary()
    {
      return $this->InventoryTransferSummary;
    }

    /**
     * @param InventoryTransferSummary[] $InventoryTransferSummary
     * @return ArrayOfInventoryTransferSummary
     */
    public function setInventoryTransferSummary(array $InventoryTransferSummary = null)
    {
      $this->InventoryTransferSummary = $InventoryTransferSummary;
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
      return isset($this->InventoryTransferSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return InventoryTransferSummary
     */
    public function offsetGet($offset)
    {
      return $this->InventoryTransferSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param InventoryTransferSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->InventoryTransferSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->InventoryTransferSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return InventoryTransferSummary Return the current element
     */
    public function current()
    {
      return current($this->InventoryTransferSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->InventoryTransferSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->InventoryTransferSummary);
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
      reset($this->InventoryTransferSummary);
    }

    /**
     * Countable implementation
     *
     * @return InventoryTransferSummary Return count of elements
     */
    public function count()
    {
      return count($this->InventoryTransferSummary);
    }

}
