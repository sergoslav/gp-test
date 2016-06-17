<?php

class ArrayOfNullableOfFeeTypefo2IbYCo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var FeeType[] $FeeType
     */
    protected $FeeType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FeeType[]
     */
    public function getFeeType()
    {
      return $this->FeeType;
    }

    /**
     * @param FeeType[] $FeeType
     * @return ArrayOfNullableOfFeeTypefo2IbYCo
     */
    public function setFeeType(array $FeeType = null)
    {
      $this->FeeType = $FeeType;
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
      return isset($this->FeeType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return FeeType
     */
    public function offsetGet($offset)
    {
      return $this->FeeType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param FeeType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->FeeType[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->FeeType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return FeeType Return the current element
     */
    public function current()
    {
      return current($this->FeeType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FeeType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FeeType);
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
      reset($this->FeeType);
    }

    /**
     * Countable implementation
     *
     * @return FeeType Return count of elements
     */
    public function count()
    {
      return count($this->FeeType);
    }

}
