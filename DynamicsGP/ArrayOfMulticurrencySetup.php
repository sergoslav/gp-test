<?php

class ArrayOfMulticurrencySetup implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MulticurrencySetup[] $MulticurrencySetup
     */
    protected $MulticurrencySetup = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MulticurrencySetup[]
     */
    public function getMulticurrencySetup()
    {
      return $this->MulticurrencySetup;
    }

    /**
     * @param MulticurrencySetup[] $MulticurrencySetup
     * @return ArrayOfMulticurrencySetup
     */
    public function setMulticurrencySetup(array $MulticurrencySetup = null)
    {
      $this->MulticurrencySetup = $MulticurrencySetup;
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
      return isset($this->MulticurrencySetup[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MulticurrencySetup
     */
    public function offsetGet($offset)
    {
      return $this->MulticurrencySetup[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MulticurrencySetup $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->MulticurrencySetup[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->MulticurrencySetup[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MulticurrencySetup Return the current element
     */
    public function current()
    {
      return current($this->MulticurrencySetup);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->MulticurrencySetup);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->MulticurrencySetup);
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
      reset($this->MulticurrencySetup);
    }

    /**
     * Countable implementation
     *
     * @return MulticurrencySetup Return count of elements
     */
    public function count()
    {
      return count($this->MulticurrencySetup);
    }

}
