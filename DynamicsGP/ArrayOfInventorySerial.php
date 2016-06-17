<?php

class ArrayOfInventorySerial implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var InventorySerial[] $InventorySerial
     */
    protected $InventorySerial = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InventorySerial[]
     */
    public function getInventorySerial()
    {
      return $this->InventorySerial;
    }

    /**
     * @param InventorySerial[] $InventorySerial
     * @return ArrayOfInventorySerial
     */
    public function setInventorySerial(array $InventorySerial = null)
    {
      $this->InventorySerial = $InventorySerial;
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
      return isset($this->InventorySerial[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return InventorySerial
     */
    public function offsetGet($offset)
    {
      return $this->InventorySerial[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param InventorySerial $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->InventorySerial[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->InventorySerial[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return InventorySerial Return the current element
     */
    public function current()
    {
      return current($this->InventorySerial);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->InventorySerial);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->InventorySerial);
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
      reset($this->InventorySerial);
    }

    /**
     * Countable implementation
     *
     * @return InventorySerial Return count of elements
     */
    public function count()
    {
      return count($this->InventorySerial);
    }

}
