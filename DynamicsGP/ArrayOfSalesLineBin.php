<?php

class ArrayOfSalesLineBin implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesLineBin[] $SalesLineBin
     */
    protected $SalesLineBin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesLineBin[]
     */
    public function getSalesLineBin()
    {
      return $this->SalesLineBin;
    }

    /**
     * @param SalesLineBin[] $SalesLineBin
     * @return ArrayOfSalesLineBin
     */
    public function setSalesLineBin(array $SalesLineBin = null)
    {
      $this->SalesLineBin = $SalesLineBin;
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
      return isset($this->SalesLineBin[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesLineBin
     */
    public function offsetGet($offset)
    {
      return $this->SalesLineBin[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesLineBin $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesLineBin[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesLineBin[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesLineBin Return the current element
     */
    public function current()
    {
      return current($this->SalesLineBin);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesLineBin);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesLineBin);
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
      reset($this->SalesLineBin);
    }

    /**
     * Countable implementation
     *
     * @return SalesLineBin Return count of elements
     */
    public function count()
    {
      return count($this->SalesLineBin);
    }

}
