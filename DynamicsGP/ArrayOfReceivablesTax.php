<?php

class ArrayOfReceivablesTax implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ReceivablesTax[] $ReceivablesTax
     */
    protected $ReceivablesTax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReceivablesTax[]
     */
    public function getReceivablesTax()
    {
      return $this->ReceivablesTax;
    }

    /**
     * @param ReceivablesTax[] $ReceivablesTax
     * @return ArrayOfReceivablesTax
     */
    public function setReceivablesTax(array $ReceivablesTax = null)
    {
      $this->ReceivablesTax = $ReceivablesTax;
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
      return isset($this->ReceivablesTax[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ReceivablesTax
     */
    public function offsetGet($offset)
    {
      return $this->ReceivablesTax[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ReceivablesTax $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ReceivablesTax[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ReceivablesTax[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ReceivablesTax Return the current element
     */
    public function current()
    {
      return current($this->ReceivablesTax);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ReceivablesTax);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ReceivablesTax);
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
      reset($this->ReceivablesTax);
    }

    /**
     * Countable implementation
     *
     * @return ReceivablesTax Return count of elements
     */
    public function count()
    {
      return count($this->ReceivablesTax);
    }

}
