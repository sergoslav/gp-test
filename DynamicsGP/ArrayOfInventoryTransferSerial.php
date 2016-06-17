<?php

class ArrayOfInventoryTransferSerial implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var InventoryTransferSerial[] $InventoryTransferSerial
     */
    protected $InventoryTransferSerial = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InventoryTransferSerial[]
     */
    public function getInventoryTransferSerial()
    {
      return $this->InventoryTransferSerial;
    }

    /**
     * @param InventoryTransferSerial[] $InventoryTransferSerial
     * @return ArrayOfInventoryTransferSerial
     */
    public function setInventoryTransferSerial(array $InventoryTransferSerial = null)
    {
      $this->InventoryTransferSerial = $InventoryTransferSerial;
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
      return isset($this->InventoryTransferSerial[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return InventoryTransferSerial
     */
    public function offsetGet($offset)
    {
      return $this->InventoryTransferSerial[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param InventoryTransferSerial $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->InventoryTransferSerial[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->InventoryTransferSerial[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return InventoryTransferSerial Return the current element
     */
    public function current()
    {
      return current($this->InventoryTransferSerial);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->InventoryTransferSerial);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->InventoryTransferSerial);
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
      reset($this->InventoryTransferSerial);
    }

    /**
     * Countable implementation
     *
     * @return InventoryTransferSerial Return count of elements
     */
    public function count()
    {
      return count($this->InventoryTransferSerial);
    }

}
