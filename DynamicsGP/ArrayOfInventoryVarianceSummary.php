<?php

class ArrayOfInventoryVarianceSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var InventoryVarianceSummary[] $InventoryVarianceSummary
     */
    protected $InventoryVarianceSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InventoryVarianceSummary[]
     */
    public function getInventoryVarianceSummary()
    {
      return $this->InventoryVarianceSummary;
    }

    /**
     * @param InventoryVarianceSummary[] $InventoryVarianceSummary
     * @return ArrayOfInventoryVarianceSummary
     */
    public function setInventoryVarianceSummary(array $InventoryVarianceSummary = null)
    {
      $this->InventoryVarianceSummary = $InventoryVarianceSummary;
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
      return isset($this->InventoryVarianceSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return InventoryVarianceSummary
     */
    public function offsetGet($offset)
    {
      return $this->InventoryVarianceSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param InventoryVarianceSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->InventoryVarianceSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->InventoryVarianceSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return InventoryVarianceSummary Return the current element
     */
    public function current()
    {
      return current($this->InventoryVarianceSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->InventoryVarianceSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->InventoryVarianceSummary);
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
      reset($this->InventoryVarianceSummary);
    }

    /**
     * Countable implementation
     *
     * @return InventoryVarianceSummary Return count of elements
     */
    public function count()
    {
      return count($this->InventoryVarianceSummary);
    }

}
