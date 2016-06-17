<?php

class ArrayOfNullableOfGLLedgerTypefo2IbYCo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var GLLedgerType[] $GLLedgerType
     */
    protected $GLLedgerType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GLLedgerType[]
     */
    public function getGLLedgerType()
    {
      return $this->GLLedgerType;
    }

    /**
     * @param GLLedgerType[] $GLLedgerType
     * @return ArrayOfNullableOfGLLedgerTypefo2IbYCo
     */
    public function setGLLedgerType(array $GLLedgerType = null)
    {
      $this->GLLedgerType = $GLLedgerType;
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
      return isset($this->GLLedgerType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return GLLedgerType
     */
    public function offsetGet($offset)
    {
      return $this->GLLedgerType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param GLLedgerType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->GLLedgerType[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->GLLedgerType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return GLLedgerType Return the current element
     */
    public function current()
    {
      return current($this->GLLedgerType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->GLLedgerType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->GLLedgerType);
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
      reset($this->GLLedgerType);
    }

    /**
     * Countable implementation
     *
     * @return GLLedgerType Return count of elements
     */
    public function count()
    {
      return count($this->GLLedgerType);
    }

}
