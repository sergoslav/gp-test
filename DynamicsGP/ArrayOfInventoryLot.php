<?php

class ArrayOfInventoryLot implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var InventoryLot[] $InventoryLot
     */
    protected $InventoryLot = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InventoryLot[]
     */
    public function getInventoryLot()
    {
      return $this->InventoryLot;
    }

    /**
     * @param InventoryLot[] $InventoryLot
     * @return ArrayOfInventoryLot
     */
    public function setInventoryLot(array $InventoryLot = null)
    {
      $this->InventoryLot = $InventoryLot;
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
      return isset($this->InventoryLot[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return InventoryLot
     */
    public function offsetGet($offset)
    {
      return $this->InventoryLot[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param InventoryLot $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->InventoryLot[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->InventoryLot[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return InventoryLot Return the current element
     */
    public function current()
    {
      return current($this->InventoryLot);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->InventoryLot);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->InventoryLot);
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
      reset($this->InventoryLot);
    }

    /**
     * Countable implementation
     *
     * @return InventoryLot Return count of elements
     */
    public function count()
    {
      return count($this->InventoryLot);
    }

}
