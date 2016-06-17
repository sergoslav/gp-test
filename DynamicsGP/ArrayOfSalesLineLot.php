<?php

class ArrayOfSalesLineLot implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesLineLot[] $SalesLineLot
     */
    protected $SalesLineLot = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesLineLot[]
     */
    public function getSalesLineLot()
    {
      return $this->SalesLineLot;
    }

    /**
     * @param SalesLineLot[] $SalesLineLot
     * @return ArrayOfSalesLineLot
     */
    public function setSalesLineLot(array $SalesLineLot = null)
    {
      $this->SalesLineLot = $SalesLineLot;
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
      return isset($this->SalesLineLot[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesLineLot
     */
    public function offsetGet($offset)
    {
      return $this->SalesLineLot[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesLineLot $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesLineLot[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesLineLot[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesLineLot Return the current element
     */
    public function current()
    {
      return current($this->SalesLineLot);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesLineLot);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesLineLot);
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
      reset($this->SalesLineLot);
    }

    /**
     * Countable implementation
     *
     * @return SalesLineLot Return count of elements
     */
    public function count()
    {
      return count($this->SalesLineLot);
    }

}
