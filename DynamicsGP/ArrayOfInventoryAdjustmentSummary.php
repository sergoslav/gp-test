<?php

class ArrayOfInventoryAdjustmentSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var InventoryAdjustmentSummary[] $InventoryAdjustmentSummary
     */
    protected $InventoryAdjustmentSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InventoryAdjustmentSummary[]
     */
    public function getInventoryAdjustmentSummary()
    {
      return $this->InventoryAdjustmentSummary;
    }

    /**
     * @param InventoryAdjustmentSummary[] $InventoryAdjustmentSummary
     * @return ArrayOfInventoryAdjustmentSummary
     */
    public function setInventoryAdjustmentSummary(array $InventoryAdjustmentSummary = null)
    {
      $this->InventoryAdjustmentSummary = $InventoryAdjustmentSummary;
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
      return isset($this->InventoryAdjustmentSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return InventoryAdjustmentSummary
     */
    public function offsetGet($offset)
    {
      return $this->InventoryAdjustmentSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param InventoryAdjustmentSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->InventoryAdjustmentSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->InventoryAdjustmentSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return InventoryAdjustmentSummary Return the current element
     */
    public function current()
    {
      return current($this->InventoryAdjustmentSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->InventoryAdjustmentSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->InventoryAdjustmentSummary);
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
      reset($this->InventoryAdjustmentSummary);
    }

    /**
     * Countable implementation
     *
     * @return InventoryAdjustmentSummary Return count of elements
     */
    public function count()
    {
      return count($this->InventoryAdjustmentSummary);
    }

}
