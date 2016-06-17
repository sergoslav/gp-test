<?php

class ArrayOfSalesLineSerial implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesLineSerial[] $SalesLineSerial
     */
    protected $SalesLineSerial = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesLineSerial[]
     */
    public function getSalesLineSerial()
    {
      return $this->SalesLineSerial;
    }

    /**
     * @param SalesLineSerial[] $SalesLineSerial
     * @return ArrayOfSalesLineSerial
     */
    public function setSalesLineSerial(array $SalesLineSerial = null)
    {
      $this->SalesLineSerial = $SalesLineSerial;
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
      return isset($this->SalesLineSerial[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesLineSerial
     */
    public function offsetGet($offset)
    {
      return $this->SalesLineSerial[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesLineSerial $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesLineSerial[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesLineSerial[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesLineSerial Return the current element
     */
    public function current()
    {
      return current($this->SalesLineSerial);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesLineSerial);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesLineSerial);
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
      reset($this->SalesLineSerial);
    }

    /**
     * Countable implementation
     *
     * @return SalesLineSerial Return count of elements
     */
    public function count()
    {
      return count($this->SalesLineSerial);
    }

}
