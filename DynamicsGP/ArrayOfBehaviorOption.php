<?php

class ArrayOfBehaviorOption implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BehaviorOption[] $BehaviorOption
     */
    protected $BehaviorOption = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BehaviorOption[]
     */
    public function getBehaviorOption()
    {
      return $this->BehaviorOption;
    }

    /**
     * @param BehaviorOption[] $BehaviorOption
     * @return ArrayOfBehaviorOption
     */
    public function setBehaviorOption(array $BehaviorOption = null)
    {
      $this->BehaviorOption = $BehaviorOption;
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
      return isset($this->BehaviorOption[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BehaviorOption
     */
    public function offsetGet($offset)
    {
      return $this->BehaviorOption[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BehaviorOption $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->BehaviorOption[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->BehaviorOption[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BehaviorOption Return the current element
     */
    public function current()
    {
      return current($this->BehaviorOption);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BehaviorOption);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BehaviorOption);
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
      reset($this->BehaviorOption);
    }

    /**
     * Countable implementation
     *
     * @return BehaviorOption Return count of elements
     */
    public function count()
    {
      return count($this->BehaviorOption);
    }

}
