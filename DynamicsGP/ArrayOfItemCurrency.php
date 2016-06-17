<?php

class ArrayOfItemCurrency implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ItemCurrency[] $ItemCurrency
     */
    protected $ItemCurrency = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemCurrency[]
     */
    public function getItemCurrency()
    {
      return $this->ItemCurrency;
    }

    /**
     * @param ItemCurrency[] $ItemCurrency
     * @return ArrayOfItemCurrency
     */
    public function setItemCurrency(array $ItemCurrency = null)
    {
      $this->ItemCurrency = $ItemCurrency;
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
      return isset($this->ItemCurrency[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ItemCurrency
     */
    public function offsetGet($offset)
    {
      return $this->ItemCurrency[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ItemCurrency $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ItemCurrency[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ItemCurrency[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ItemCurrency Return the current element
     */
    public function current()
    {
      return current($this->ItemCurrency);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ItemCurrency);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ItemCurrency);
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
      reset($this->ItemCurrency);
    }

    /**
     * Countable implementation
     *
     * @return ItemCurrency Return count of elements
     */
    public function count()
    {
      return count($this->ItemCurrency);
    }

}
