<?php

class ArrayOfSalesPayment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesPayment[] $SalesPayment
     */
    protected $SalesPayment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesPayment[]
     */
    public function getSalesPayment()
    {
      return $this->SalesPayment;
    }

    /**
     * @param SalesPayment[] $SalesPayment
     * @return ArrayOfSalesPayment
     */
    public function setSalesPayment(array $SalesPayment = null)
    {
      $this->SalesPayment = $SalesPayment;
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
      return isset($this->SalesPayment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesPayment
     */
    public function offsetGet($offset)
    {
      return $this->SalesPayment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesPayment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesPayment[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesPayment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesPayment Return the current element
     */
    public function current()
    {
      return current($this->SalesPayment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesPayment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesPayment);
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
      reset($this->SalesPayment);
    }

    /**
     * Countable implementation
     *
     * @return SalesPayment Return count of elements
     */
    public function count()
    {
      return count($this->SalesPayment);
    }

}
