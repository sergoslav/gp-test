<?php

class ArrayOfInventoryVarianceLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var InventoryVarianceLine[] $InventoryVarianceLine
     */
    protected $InventoryVarianceLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InventoryVarianceLine[]
     */
    public function getInventoryVarianceLine()
    {
      return $this->InventoryVarianceLine;
    }

    /**
     * @param InventoryVarianceLine[] $InventoryVarianceLine
     * @return ArrayOfInventoryVarianceLine
     */
    public function setInventoryVarianceLine(array $InventoryVarianceLine = null)
    {
      $this->InventoryVarianceLine = $InventoryVarianceLine;
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
      return isset($this->InventoryVarianceLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return InventoryVarianceLine
     */
    public function offsetGet($offset)
    {
      return $this->InventoryVarianceLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param InventoryVarianceLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->InventoryVarianceLine[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->InventoryVarianceLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return InventoryVarianceLine Return the current element
     */
    public function current()
    {
      return current($this->InventoryVarianceLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->InventoryVarianceLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->InventoryVarianceLine);
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
      reset($this->InventoryVarianceLine);
    }

    /**
     * Countable implementation
     *
     * @return InventoryVarianceLine Return count of elements
     */
    public function count()
    {
      return count($this->InventoryVarianceLine);
    }

}
