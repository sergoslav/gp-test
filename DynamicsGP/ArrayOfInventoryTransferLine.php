<?php

class ArrayOfInventoryTransferLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var InventoryTransferLine[] $InventoryTransferLine
     */
    protected $InventoryTransferLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InventoryTransferLine[]
     */
    public function getInventoryTransferLine()
    {
      return $this->InventoryTransferLine;
    }

    /**
     * @param InventoryTransferLine[] $InventoryTransferLine
     * @return ArrayOfInventoryTransferLine
     */
    public function setInventoryTransferLine(array $InventoryTransferLine = null)
    {
      $this->InventoryTransferLine = $InventoryTransferLine;
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
      return isset($this->InventoryTransferLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return InventoryTransferLine
     */
    public function offsetGet($offset)
    {
      return $this->InventoryTransferLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param InventoryTransferLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->InventoryTransferLine[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->InventoryTransferLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return InventoryTransferLine Return the current element
     */
    public function current()
    {
      return current($this->InventoryTransferLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->InventoryTransferLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->InventoryTransferLine);
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
      reset($this->InventoryTransferLine);
    }

    /**
     * Countable implementation
     *
     * @return InventoryTransferLine Return count of elements
     */
    public function count()
    {
      return count($this->InventoryTransferLine);
    }

}
