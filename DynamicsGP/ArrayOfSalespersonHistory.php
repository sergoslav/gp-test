<?php

class ArrayOfSalespersonHistory implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalespersonHistory[] $SalespersonHistory
     */
    protected $SalespersonHistory = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalespersonHistory[]
     */
    public function getSalespersonHistory()
    {
      return $this->SalespersonHistory;
    }

    /**
     * @param SalespersonHistory[] $SalespersonHistory
     * @return ArrayOfSalespersonHistory
     */
    public function setSalespersonHistory(array $SalespersonHistory = null)
    {
      $this->SalespersonHistory = $SalespersonHistory;
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
      return isset($this->SalespersonHistory[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalespersonHistory
     */
    public function offsetGet($offset)
    {
      return $this->SalespersonHistory[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalespersonHistory $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalespersonHistory[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalespersonHistory[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalespersonHistory Return the current element
     */
    public function current()
    {
      return current($this->SalespersonHistory);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalespersonHistory);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalespersonHistory);
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
      reset($this->SalespersonHistory);
    }

    /**
     * Countable implementation
     *
     * @return SalespersonHistory Return count of elements
     */
    public function count()
    {
      return count($this->SalespersonHistory);
    }

}
