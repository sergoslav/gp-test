<?php

class ArrayOfWarehouseBin implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var WarehouseBin[] $WarehouseBin
     */
    protected $WarehouseBin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return WarehouseBin[]
     */
    public function getWarehouseBin()
    {
      return $this->WarehouseBin;
    }

    /**
     * @param WarehouseBin[] $WarehouseBin
     * @return ArrayOfWarehouseBin
     */
    public function setWarehouseBin(array $WarehouseBin = null)
    {
      $this->WarehouseBin = $WarehouseBin;
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
      return isset($this->WarehouseBin[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return WarehouseBin
     */
    public function offsetGet($offset)
    {
      return $this->WarehouseBin[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param WarehouseBin $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->WarehouseBin[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->WarehouseBin[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return WarehouseBin Return the current element
     */
    public function current()
    {
      return current($this->WarehouseBin);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->WarehouseBin);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->WarehouseBin);
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
      reset($this->WarehouseBin);
    }

    /**
     * Countable implementation
     *
     * @return WarehouseBin Return count of elements
     */
    public function count()
    {
      return count($this->WarehouseBin);
    }

}
