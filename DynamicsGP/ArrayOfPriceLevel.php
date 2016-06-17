<?php

class ArrayOfPriceLevel implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PriceLevel[] $PriceLevel
     */
    protected $PriceLevel = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PriceLevel[]
     */
    public function getPriceLevel()
    {
      return $this->PriceLevel;
    }

    /**
     * @param PriceLevel[] $PriceLevel
     * @return ArrayOfPriceLevel
     */
    public function setPriceLevel(array $PriceLevel = null)
    {
      $this->PriceLevel = $PriceLevel;
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
      return isset($this->PriceLevel[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PriceLevel
     */
    public function offsetGet($offset)
    {
      return $this->PriceLevel[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PriceLevel $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PriceLevel[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PriceLevel[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PriceLevel Return the current element
     */
    public function current()
    {
      return current($this->PriceLevel);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PriceLevel);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PriceLevel);
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
      reset($this->PriceLevel);
    }

    /**
     * Countable implementation
     *
     * @return PriceLevel Return count of elements
     */
    public function count()
    {
      return count($this->PriceLevel);
    }

}
