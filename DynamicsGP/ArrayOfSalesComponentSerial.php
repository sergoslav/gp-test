<?php

class ArrayOfSalesComponentSerial implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesComponentSerial[] $SalesComponentSerial
     */
    protected $SalesComponentSerial = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesComponentSerial[]
     */
    public function getSalesComponentSerial()
    {
      return $this->SalesComponentSerial;
    }

    /**
     * @param SalesComponentSerial[] $SalesComponentSerial
     * @return ArrayOfSalesComponentSerial
     */
    public function setSalesComponentSerial(array $SalesComponentSerial = null)
    {
      $this->SalesComponentSerial = $SalesComponentSerial;
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
      return isset($this->SalesComponentSerial[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesComponentSerial
     */
    public function offsetGet($offset)
    {
      return $this->SalesComponentSerial[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesComponentSerial $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesComponentSerial[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesComponentSerial[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesComponentSerial Return the current element
     */
    public function current()
    {
      return current($this->SalesComponentSerial);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesComponentSerial);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesComponentSerial);
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
      reset($this->SalesComponentSerial);
    }

    /**
     * Countable implementation
     *
     * @return SalesComponentSerial Return count of elements
     */
    public function count()
    {
      return count($this->SalesComponentSerial);
    }

}
