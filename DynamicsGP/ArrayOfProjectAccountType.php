<?php

class ArrayOfProjectAccountType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProjectAccountType[] $ProjectAccountType
     */
    protected $ProjectAccountType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectAccountType[]
     */
    public function getProjectAccountType()
    {
      return $this->ProjectAccountType;
    }

    /**
     * @param ProjectAccountType[] $ProjectAccountType
     * @return ArrayOfProjectAccountType
     */
    public function setProjectAccountType(array $ProjectAccountType = null)
    {
      $this->ProjectAccountType = $ProjectAccountType;
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
      return isset($this->ProjectAccountType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProjectAccountType
     */
    public function offsetGet($offset)
    {
      return $this->ProjectAccountType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProjectAccountType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProjectAccountType[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProjectAccountType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProjectAccountType Return the current element
     */
    public function current()
    {
      return current($this->ProjectAccountType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProjectAccountType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProjectAccountType);
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
      reset($this->ProjectAccountType);
    }

    /**
     * Countable implementation
     *
     * @return ProjectAccountType Return count of elements
     */
    public function count()
    {
      return count($this->ProjectAccountType);
    }

}
