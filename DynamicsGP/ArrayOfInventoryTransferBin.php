<?php

class ArrayOfInventoryTransferBin implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var InventoryTransferBin[] $InventoryTransferBin
     */
    protected $InventoryTransferBin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InventoryTransferBin[]
     */
    public function getInventoryTransferBin()
    {
      return $this->InventoryTransferBin;
    }

    /**
     * @param InventoryTransferBin[] $InventoryTransferBin
     * @return ArrayOfInventoryTransferBin
     */
    public function setInventoryTransferBin(array $InventoryTransferBin = null)
    {
      $this->InventoryTransferBin = $InventoryTransferBin;
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
      return isset($this->InventoryTransferBin[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return InventoryTransferBin
     */
    public function offsetGet($offset)
    {
      return $this->InventoryTransferBin[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param InventoryTransferBin $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->InventoryTransferBin[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->InventoryTransferBin[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return InventoryTransferBin Return the current element
     */
    public function current()
    {
      return current($this->InventoryTransferBin);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->InventoryTransferBin);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->InventoryTransferBin);
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
      reset($this->InventoryTransferBin);
    }

    /**
     * Countable implementation
     *
     * @return InventoryTransferBin Return count of elements
     */
    public function count()
    {
      return count($this->InventoryTransferBin);
    }

}
