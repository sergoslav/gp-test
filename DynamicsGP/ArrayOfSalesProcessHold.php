<?php

class ArrayOfSalesProcessHold implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesProcessHold[] $SalesProcessHold
     */
    protected $SalesProcessHold = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesProcessHold[]
     */
    public function getSalesProcessHold()
    {
      return $this->SalesProcessHold;
    }

    /**
     * @param SalesProcessHold[] $SalesProcessHold
     * @return ArrayOfSalesProcessHold
     */
    public function setSalesProcessHold(array $SalesProcessHold = null)
    {
      $this->SalesProcessHold = $SalesProcessHold;
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
      return isset($this->SalesProcessHold[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesProcessHold
     */
    public function offsetGet($offset)
    {
      return $this->SalesProcessHold[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesProcessHold $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesProcessHold[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesProcessHold[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesProcessHold Return the current element
     */
    public function current()
    {
      return current($this->SalesProcessHold);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesProcessHold);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesProcessHold);
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
      reset($this->SalesProcessHold);
    }

    /**
     * Countable implementation
     *
     * @return SalesProcessHold Return count of elements
     */
    public function count()
    {
      return count($this->SalesProcessHold);
    }

}
