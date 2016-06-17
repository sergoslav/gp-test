<?php

class ArrayOfReceivablesReturnSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ReceivablesReturnSummary[] $ReceivablesReturnSummary
     */
    protected $ReceivablesReturnSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReceivablesReturnSummary[]
     */
    public function getReceivablesReturnSummary()
    {
      return $this->ReceivablesReturnSummary;
    }

    /**
     * @param ReceivablesReturnSummary[] $ReceivablesReturnSummary
     * @return ArrayOfReceivablesReturnSummary
     */
    public function setReceivablesReturnSummary(array $ReceivablesReturnSummary = null)
    {
      $this->ReceivablesReturnSummary = $ReceivablesReturnSummary;
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
      return isset($this->ReceivablesReturnSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ReceivablesReturnSummary
     */
    public function offsetGet($offset)
    {
      return $this->ReceivablesReturnSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ReceivablesReturnSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ReceivablesReturnSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ReceivablesReturnSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ReceivablesReturnSummary Return the current element
     */
    public function current()
    {
      return current($this->ReceivablesReturnSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ReceivablesReturnSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ReceivablesReturnSummary);
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
      reset($this->ReceivablesReturnSummary);
    }

    /**
     * Countable implementation
     *
     * @return ReceivablesReturnSummary Return count of elements
     */
    public function count()
    {
      return count($this->ReceivablesReturnSummary);
    }

}
