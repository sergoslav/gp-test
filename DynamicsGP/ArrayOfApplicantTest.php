<?php

class ArrayOfApplicantTest implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ApplicantTest[] $ApplicantTest
     */
    protected $ApplicantTest = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ApplicantTest[]
     */
    public function getApplicantTest()
    {
      return $this->ApplicantTest;
    }

    /**
     * @param ApplicantTest[] $ApplicantTest
     * @return ArrayOfApplicantTest
     */
    public function setApplicantTest(array $ApplicantTest = null)
    {
      $this->ApplicantTest = $ApplicantTest;
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
      return isset($this->ApplicantTest[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ApplicantTest
     */
    public function offsetGet($offset)
    {
      return $this->ApplicantTest[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ApplicantTest $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ApplicantTest[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ApplicantTest[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ApplicantTest Return the current element
     */
    public function current()
    {
      return current($this->ApplicantTest);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ApplicantTest);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ApplicantTest);
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
      reset($this->ApplicantTest);
    }

    /**
     * Countable implementation
     *
     * @return ApplicantTest Return count of elements
     */
    public function count()
    {
      return count($this->ApplicantTest);
    }

}
