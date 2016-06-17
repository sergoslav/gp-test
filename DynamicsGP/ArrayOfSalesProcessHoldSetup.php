<?php

class ArrayOfSalesProcessHoldSetup implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesProcessHoldSetup[] $SalesProcessHoldSetup
     */
    protected $SalesProcessHoldSetup = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesProcessHoldSetup[]
     */
    public function getSalesProcessHoldSetup()
    {
      return $this->SalesProcessHoldSetup;
    }

    /**
     * @param SalesProcessHoldSetup[] $SalesProcessHoldSetup
     * @return ArrayOfSalesProcessHoldSetup
     */
    public function setSalesProcessHoldSetup(array $SalesProcessHoldSetup = null)
    {
      $this->SalesProcessHoldSetup = $SalesProcessHoldSetup;
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
      return isset($this->SalesProcessHoldSetup[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesProcessHoldSetup
     */
    public function offsetGet($offset)
    {
      return $this->SalesProcessHoldSetup[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesProcessHoldSetup $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesProcessHoldSetup[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesProcessHoldSetup[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesProcessHoldSetup Return the current element
     */
    public function current()
    {
      return current($this->SalesProcessHoldSetup);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesProcessHoldSetup);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesProcessHoldSetup);
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
      reset($this->SalesProcessHoldSetup);
    }

    /**
     * Countable implementation
     *
     * @return SalesProcessHoldSetup Return count of elements
     */
    public function count()
    {
      return count($this->SalesProcessHoldSetup);
    }

}
