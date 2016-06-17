<?php

class ArrayOfPayablesTax implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PayablesTax[] $PayablesTax
     */
    protected $PayablesTax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PayablesTax[]
     */
    public function getPayablesTax()
    {
      return $this->PayablesTax;
    }

    /**
     * @param PayablesTax[] $PayablesTax
     * @return ArrayOfPayablesTax
     */
    public function setPayablesTax(array $PayablesTax = null)
    {
      $this->PayablesTax = $PayablesTax;
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
      return isset($this->PayablesTax[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PayablesTax
     */
    public function offsetGet($offset)
    {
      return $this->PayablesTax[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PayablesTax $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PayablesTax[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PayablesTax[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PayablesTax Return the current element
     */
    public function current()
    {
      return current($this->PayablesTax);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PayablesTax);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PayablesTax);
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
      reset($this->PayablesTax);
    }

    /**
     * Countable implementation
     *
     * @return PayablesTax Return count of elements
     */
    public function count()
    {
      return count($this->PayablesTax);
    }

}
