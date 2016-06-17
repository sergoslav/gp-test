<?php

class ArrayOfInventoryTransferLot implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var InventoryTransferLot[] $InventoryTransferLot
     */
    protected $InventoryTransferLot = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InventoryTransferLot[]
     */
    public function getInventoryTransferLot()
    {
      return $this->InventoryTransferLot;
    }

    /**
     * @param InventoryTransferLot[] $InventoryTransferLot
     * @return ArrayOfInventoryTransferLot
     */
    public function setInventoryTransferLot(array $InventoryTransferLot = null)
    {
      $this->InventoryTransferLot = $InventoryTransferLot;
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
      return isset($this->InventoryTransferLot[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return InventoryTransferLot
     */
    public function offsetGet($offset)
    {
      return $this->InventoryTransferLot[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param InventoryTransferLot $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->InventoryTransferLot[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->InventoryTransferLot[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return InventoryTransferLot Return the current element
     */
    public function current()
    {
      return current($this->InventoryTransferLot);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->InventoryTransferLot);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->InventoryTransferLot);
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
      reset($this->InventoryTransferLot);
    }

    /**
     * Countable implementation
     *
     * @return InventoryTransferLot Return count of elements
     */
    public function count()
    {
      return count($this->InventoryTransferLot);
    }

}
