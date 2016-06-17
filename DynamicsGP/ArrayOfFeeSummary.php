<?php

class ArrayOfFeeSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var FeeSummary[] $FeeSummary
     */
    protected $FeeSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FeeSummary[]
     */
    public function getFeeSummary()
    {
      return $this->FeeSummary;
    }

    /**
     * @param FeeSummary[] $FeeSummary
     * @return ArrayOfFeeSummary
     */
    public function setFeeSummary(array $FeeSummary = null)
    {
      $this->FeeSummary = $FeeSummary;
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
      return isset($this->FeeSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return FeeSummary
     */
    public function offsetGet($offset)
    {
      return $this->FeeSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param FeeSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->FeeSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->FeeSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return FeeSummary Return the current element
     */
    public function current()
    {
      return current($this->FeeSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FeeSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FeeSummary);
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
      reset($this->FeeSummary);
    }

    /**
     * Countable implementation
     *
     * @return FeeSummary Return count of elements
     */
    public function count()
    {
      return count($this->FeeSummary);
    }

}
