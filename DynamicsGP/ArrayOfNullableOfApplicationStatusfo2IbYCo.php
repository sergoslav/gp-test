<?php

class ArrayOfNullableOfApplicationStatusfo2IbYCo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ApplicationStatus[] $ApplicationStatus
     */
    protected $ApplicationStatus = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ApplicationStatus[]
     */
    public function getApplicationStatus()
    {
      return $this->ApplicationStatus;
    }

    /**
     * @param ApplicationStatus[] $ApplicationStatus
     * @return ArrayOfNullableOfApplicationStatusfo2IbYCo
     */
    public function setApplicationStatus(array $ApplicationStatus = null)
    {
      $this->ApplicationStatus = $ApplicationStatus;
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
      return isset($this->ApplicationStatus[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ApplicationStatus
     */
    public function offsetGet($offset)
    {
      return $this->ApplicationStatus[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ApplicationStatus $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ApplicationStatus[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ApplicationStatus[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ApplicationStatus Return the current element
     */
    public function current()
    {
      return current($this->ApplicationStatus);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ApplicationStatus);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ApplicationStatus);
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
      reset($this->ApplicationStatus);
    }

    /**
     * Countable implementation
     *
     * @return ApplicationStatus Return count of elements
     */
    public function count()
    {
      return count($this->ApplicationStatus);
    }

}
