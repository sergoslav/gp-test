<?php

class ArrayOfPayablesReturnSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PayablesReturnSummary[] $PayablesReturnSummary
     */
    protected $PayablesReturnSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PayablesReturnSummary[]
     */
    public function getPayablesReturnSummary()
    {
      return $this->PayablesReturnSummary;
    }

    /**
     * @param PayablesReturnSummary[] $PayablesReturnSummary
     * @return ArrayOfPayablesReturnSummary
     */
    public function setPayablesReturnSummary(array $PayablesReturnSummary = null)
    {
      $this->PayablesReturnSummary = $PayablesReturnSummary;
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
      return isset($this->PayablesReturnSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PayablesReturnSummary
     */
    public function offsetGet($offset)
    {
      return $this->PayablesReturnSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PayablesReturnSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PayablesReturnSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PayablesReturnSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PayablesReturnSummary Return the current element
     */
    public function current()
    {
      return current($this->PayablesReturnSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PayablesReturnSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PayablesReturnSummary);
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
      reset($this->PayablesReturnSummary);
    }

    /**
     * Countable implementation
     *
     * @return PayablesReturnSummary Return count of elements
     */
    public function count()
    {
      return count($this->PayablesReturnSummary);
    }

}
