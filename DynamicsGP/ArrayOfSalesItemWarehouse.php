<?php

class ArrayOfSalesItemWarehouse implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesItemWarehouse[] $SalesItemWarehouse
     */
    protected $SalesItemWarehouse = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesItemWarehouse[]
     */
    public function getSalesItemWarehouse()
    {
      return $this->SalesItemWarehouse;
    }

    /**
     * @param SalesItemWarehouse[] $SalesItemWarehouse
     * @return ArrayOfSalesItemWarehouse
     */
    public function setSalesItemWarehouse(array $SalesItemWarehouse = null)
    {
      $this->SalesItemWarehouse = $SalesItemWarehouse;
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
      return isset($this->SalesItemWarehouse[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesItemWarehouse
     */
    public function offsetGet($offset)
    {
      return $this->SalesItemWarehouse[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesItemWarehouse $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesItemWarehouse[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesItemWarehouse[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesItemWarehouse Return the current element
     */
    public function current()
    {
      return current($this->SalesItemWarehouse);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesItemWarehouse);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesItemWarehouse);
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
      reset($this->SalesItemWarehouse);
    }

    /**
     * Countable implementation
     *
     * @return SalesItemWarehouse Return count of elements
     */
    public function count()
    {
      return count($this->SalesItemWarehouse);
    }

}
