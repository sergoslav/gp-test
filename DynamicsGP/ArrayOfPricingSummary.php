<?php

class ArrayOfPricingSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PricingSummary[] $PricingSummary
     */
    protected $PricingSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PricingSummary[]
     */
    public function getPricingSummary()
    {
      return $this->PricingSummary;
    }

    /**
     * @param PricingSummary[] $PricingSummary
     * @return ArrayOfPricingSummary
     */
    public function setPricingSummary(array $PricingSummary = null)
    {
      $this->PricingSummary = $PricingSummary;
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
      return isset($this->PricingSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PricingSummary
     */
    public function offsetGet($offset)
    {
      return $this->PricingSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PricingSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PricingSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PricingSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PricingSummary Return the current element
     */
    public function current()
    {
      return current($this->PricingSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PricingSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PricingSummary);
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
      reset($this->PricingSummary);
    }

    /**
     * Countable implementation
     *
     * @return PricingSummary Return count of elements
     */
    public function count()
    {
      return count($this->PricingSummary);
    }

}
