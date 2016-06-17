<?php

class ArrayOfWarehouseSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var WarehouseSummary[] $WarehouseSummary
     */
    protected $WarehouseSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return WarehouseSummary[]
     */
    public function getWarehouseSummary()
    {
      return $this->WarehouseSummary;
    }

    /**
     * @param WarehouseSummary[] $WarehouseSummary
     * @return ArrayOfWarehouseSummary
     */
    public function setWarehouseSummary(array $WarehouseSummary = null)
    {
      $this->WarehouseSummary = $WarehouseSummary;
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
      return isset($this->WarehouseSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return WarehouseSummary
     */
    public function offsetGet($offset)
    {
      return $this->WarehouseSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param WarehouseSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->WarehouseSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->WarehouseSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return WarehouseSummary Return the current element
     */
    public function current()
    {
      return current($this->WarehouseSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->WarehouseSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->WarehouseSummary);
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
      reset($this->WarehouseSummary);
    }

    /**
     * Countable implementation
     *
     * @return WarehouseSummary Return count of elements
     */
    public function count()
    {
      return count($this->WarehouseSummary);
    }

}
