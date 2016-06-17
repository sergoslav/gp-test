<?php

class ArrayOfServiceLot implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ServiceLot[] $ServiceLot
     */
    protected $ServiceLot = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceLot[]
     */
    public function getServiceLot()
    {
      return $this->ServiceLot;
    }

    /**
     * @param ServiceLot[] $ServiceLot
     * @return ArrayOfServiceLot
     */
    public function setServiceLot(array $ServiceLot = null)
    {
      $this->ServiceLot = $ServiceLot;
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
      return isset($this->ServiceLot[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ServiceLot
     */
    public function offsetGet($offset)
    {
      return $this->ServiceLot[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ServiceLot $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ServiceLot[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ServiceLot[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ServiceLot Return the current element
     */
    public function current()
    {
      return current($this->ServiceLot);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServiceLot);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServiceLot);
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
      reset($this->ServiceLot);
    }

    /**
     * Countable implementation
     *
     * @return ServiceLot Return count of elements
     */
    public function count()
    {
      return count($this->ServiceLot);
    }

}
