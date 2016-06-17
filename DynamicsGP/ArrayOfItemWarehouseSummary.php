<?php

class ArrayOfItemWarehouseSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ItemWarehouseSummary[] $ItemWarehouseSummary
     */
    protected $ItemWarehouseSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemWarehouseSummary[]
     */
    public function getItemWarehouseSummary()
    {
      return $this->ItemWarehouseSummary;
    }

    /**
     * @param ItemWarehouseSummary[] $ItemWarehouseSummary
     * @return ArrayOfItemWarehouseSummary
     */
    public function setItemWarehouseSummary(array $ItemWarehouseSummary = null)
    {
      $this->ItemWarehouseSummary = $ItemWarehouseSummary;
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
      return isset($this->ItemWarehouseSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ItemWarehouseSummary
     */
    public function offsetGet($offset)
    {
      return $this->ItemWarehouseSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ItemWarehouseSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ItemWarehouseSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ItemWarehouseSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ItemWarehouseSummary Return the current element
     */
    public function current()
    {
      return current($this->ItemWarehouseSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ItemWarehouseSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ItemWarehouseSummary);
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
      reset($this->ItemWarehouseSummary);
    }

    /**
     * Countable implementation
     *
     * @return ItemWarehouseSummary Return count of elements
     */
    public function count()
    {
      return count($this->ItemWarehouseSummary);
    }

}
