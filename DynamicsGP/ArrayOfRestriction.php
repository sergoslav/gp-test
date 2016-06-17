<?php

class ArrayOfRestriction implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Restriction[] $Restriction
     */
    protected $Restriction = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Restriction[]
     */
    public function getRestriction()
    {
      return $this->Restriction;
    }

    /**
     * @param Restriction[] $Restriction
     * @return ArrayOfRestriction
     */
    public function setRestriction(array $Restriction = null)
    {
      $this->Restriction = $Restriction;
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
      return isset($this->Restriction[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Restriction
     */
    public function offsetGet($offset)
    {
      return $this->Restriction[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Restriction $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->Restriction[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Restriction[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Restriction Return the current element
     */
    public function current()
    {
      return current($this->Restriction);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Restriction);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Restriction);
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
      reset($this->Restriction);
    }

    /**
     * Countable implementation
     *
     * @return Restriction Return count of elements
     */
    public function count()
    {
      return count($this->Restriction);
    }

}
