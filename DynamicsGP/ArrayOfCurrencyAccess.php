<?php

class ArrayOfCurrencyAccess implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CurrencyAccess[] $CurrencyAccess
     */
    protected $CurrencyAccess = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CurrencyAccess[]
     */
    public function getCurrencyAccess()
    {
      return $this->CurrencyAccess;
    }

    /**
     * @param CurrencyAccess[] $CurrencyAccess
     * @return ArrayOfCurrencyAccess
     */
    public function setCurrencyAccess(array $CurrencyAccess = null)
    {
      $this->CurrencyAccess = $CurrencyAccess;
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
      return isset($this->CurrencyAccess[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CurrencyAccess
     */
    public function offsetGet($offset)
    {
      return $this->CurrencyAccess[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CurrencyAccess $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CurrencyAccess[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CurrencyAccess[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CurrencyAccess Return the current element
     */
    public function current()
    {
      return current($this->CurrencyAccess);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CurrencyAccess);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CurrencyAccess);
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
      reset($this->CurrencyAccess);
    }

    /**
     * Countable implementation
     *
     * @return CurrencyAccess Return count of elements
     */
    public function count()
    {
      return count($this->CurrencyAccess);
    }

}
