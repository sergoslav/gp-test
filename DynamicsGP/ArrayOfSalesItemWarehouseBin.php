<?php

class ArrayOfSalesItemWarehouseBin implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesItemWarehouseBin[] $SalesItemWarehouseBin
     */
    protected $SalesItemWarehouseBin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesItemWarehouseBin[]
     */
    public function getSalesItemWarehouseBin()
    {
      return $this->SalesItemWarehouseBin;
    }

    /**
     * @param SalesItemWarehouseBin[] $SalesItemWarehouseBin
     * @return ArrayOfSalesItemWarehouseBin
     */
    public function setSalesItemWarehouseBin(array $SalesItemWarehouseBin = null)
    {
      $this->SalesItemWarehouseBin = $SalesItemWarehouseBin;
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
      return isset($this->SalesItemWarehouseBin[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesItemWarehouseBin
     */
    public function offsetGet($offset)
    {
      return $this->SalesItemWarehouseBin[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesItemWarehouseBin $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesItemWarehouseBin[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesItemWarehouseBin[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesItemWarehouseBin Return the current element
     */
    public function current()
    {
      return current($this->SalesItemWarehouseBin);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesItemWarehouseBin);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesItemWarehouseBin);
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
      reset($this->SalesItemWarehouseBin);
    }

    /**
     * Countable implementation
     *
     * @return SalesItemWarehouseBin Return count of elements
     */
    public function count()
    {
      return count($this->SalesItemWarehouseBin);
    }

}
