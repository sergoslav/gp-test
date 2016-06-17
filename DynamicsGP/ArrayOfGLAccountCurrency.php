<?php

class ArrayOfGLAccountCurrency implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var GLAccountCurrency[] $GLAccountCurrency
     */
    protected $GLAccountCurrency = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GLAccountCurrency[]
     */
    public function getGLAccountCurrency()
    {
      return $this->GLAccountCurrency;
    }

    /**
     * @param GLAccountCurrency[] $GLAccountCurrency
     * @return ArrayOfGLAccountCurrency
     */
    public function setGLAccountCurrency(array $GLAccountCurrency = null)
    {
      $this->GLAccountCurrency = $GLAccountCurrency;
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
      return isset($this->GLAccountCurrency[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return GLAccountCurrency
     */
    public function offsetGet($offset)
    {
      return $this->GLAccountCurrency[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param GLAccountCurrency $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->GLAccountCurrency[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->GLAccountCurrency[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return GLAccountCurrency Return the current element
     */
    public function current()
    {
      return current($this->GLAccountCurrency);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->GLAccountCurrency);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->GLAccountCurrency);
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
      reset($this->GLAccountCurrency);
    }

    /**
     * Countable implementation
     *
     * @return GLAccountCurrency Return count of elements
     */
    public function count()
    {
      return count($this->GLAccountCurrency);
    }

}
