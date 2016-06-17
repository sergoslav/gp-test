<?php

class ArrayOfSalesCommission implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesCommission[] $SalesCommission
     */
    protected $SalesCommission = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesCommission[]
     */
    public function getSalesCommission()
    {
      return $this->SalesCommission;
    }

    /**
     * @param SalesCommission[] $SalesCommission
     * @return ArrayOfSalesCommission
     */
    public function setSalesCommission(array $SalesCommission = null)
    {
      $this->SalesCommission = $SalesCommission;
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
      return isset($this->SalesCommission[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesCommission
     */
    public function offsetGet($offset)
    {
      return $this->SalesCommission[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesCommission $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesCommission[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesCommission[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesCommission Return the current element
     */
    public function current()
    {
      return current($this->SalesCommission);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesCommission);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesCommission);
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
      reset($this->SalesCommission);
    }

    /**
     * Countable implementation
     *
     * @return SalesCommission Return count of elements
     */
    public function count()
    {
      return count($this->SalesCommission);
    }

}
