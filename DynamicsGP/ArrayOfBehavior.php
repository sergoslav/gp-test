<?php

class ArrayOfBehavior implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Behavior[] $Behavior
     */
    protected $Behavior = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Behavior[]
     */
    public function getBehavior()
    {
      return $this->Behavior;
    }

    /**
     * @param Behavior[] $Behavior
     * @return ArrayOfBehavior
     */
    public function setBehavior(array $Behavior = null)
    {
      $this->Behavior = $Behavior;
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
      return isset($this->Behavior[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Behavior
     */
    public function offsetGet($offset)
    {
      return $this->Behavior[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Behavior $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->Behavior[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Behavior[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Behavior Return the current element
     */
    public function current()
    {
      return current($this->Behavior);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Behavior);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Behavior);
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
      reset($this->Behavior);
    }

    /**
     * Countable implementation
     *
     * @return Behavior Return count of elements
     */
    public function count()
    {
      return count($this->Behavior);
    }

}
