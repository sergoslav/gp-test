<?php

class ArrayOfSalesComponentLot implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesComponentLot[] $SalesComponentLot
     */
    protected $SalesComponentLot = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesComponentLot[]
     */
    public function getSalesComponentLot()
    {
      return $this->SalesComponentLot;
    }

    /**
     * @param SalesComponentLot[] $SalesComponentLot
     * @return ArrayOfSalesComponentLot
     */
    public function setSalesComponentLot(array $SalesComponentLot = null)
    {
      $this->SalesComponentLot = $SalesComponentLot;
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
      return isset($this->SalesComponentLot[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesComponentLot
     */
    public function offsetGet($offset)
    {
      return $this->SalesComponentLot[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesComponentLot $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesComponentLot[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesComponentLot[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesComponentLot Return the current element
     */
    public function current()
    {
      return current($this->SalesComponentLot);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesComponentLot);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesComponentLot);
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
      reset($this->SalesComponentLot);
    }

    /**
     * Countable implementation
     *
     * @return SalesComponentLot Return count of elements
     */
    public function count()
    {
      return count($this->SalesComponentLot);
    }

}
