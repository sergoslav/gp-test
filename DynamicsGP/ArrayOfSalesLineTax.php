<?php

class ArrayOfSalesLineTax implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesLineTax[] $SalesLineTax
     */
    protected $SalesLineTax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesLineTax[]
     */
    public function getSalesLineTax()
    {
      return $this->SalesLineTax;
    }

    /**
     * @param SalesLineTax[] $SalesLineTax
     * @return ArrayOfSalesLineTax
     */
    public function setSalesLineTax(array $SalesLineTax = null)
    {
      $this->SalesLineTax = $SalesLineTax;
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
      return isset($this->SalesLineTax[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesLineTax
     */
    public function offsetGet($offset)
    {
      return $this->SalesLineTax[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesLineTax $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesLineTax[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesLineTax[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesLineTax Return the current element
     */
    public function current()
    {
      return current($this->SalesLineTax);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesLineTax);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesLineTax);
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
      reset($this->SalesLineTax);
    }

    /**
     * Countable implementation
     *
     * @return SalesLineTax Return count of elements
     */
    public function count()
    {
      return count($this->SalesLineTax);
    }

}
