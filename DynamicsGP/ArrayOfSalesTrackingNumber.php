<?php

class ArrayOfSalesTrackingNumber implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesTrackingNumber[] $SalesTrackingNumber
     */
    protected $SalesTrackingNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesTrackingNumber[]
     */
    public function getSalesTrackingNumber()
    {
      return $this->SalesTrackingNumber;
    }

    /**
     * @param SalesTrackingNumber[] $SalesTrackingNumber
     * @return ArrayOfSalesTrackingNumber
     */
    public function setSalesTrackingNumber(array $SalesTrackingNumber = null)
    {
      $this->SalesTrackingNumber = $SalesTrackingNumber;
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
      return isset($this->SalesTrackingNumber[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesTrackingNumber
     */
    public function offsetGet($offset)
    {
      return $this->SalesTrackingNumber[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesTrackingNumber $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesTrackingNumber[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesTrackingNumber[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesTrackingNumber Return the current element
     */
    public function current()
    {
      return current($this->SalesTrackingNumber);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesTrackingNumber);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesTrackingNumber);
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
      reset($this->SalesTrackingNumber);
    }

    /**
     * Countable implementation
     *
     * @return SalesTrackingNumber Return count of elements
     */
    public function count()
    {
      return count($this->SalesTrackingNumber);
    }

}
