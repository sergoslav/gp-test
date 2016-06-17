<?php

class ArrayOfApplicantEducation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ApplicantEducation[] $ApplicantEducation
     */
    protected $ApplicantEducation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ApplicantEducation[]
     */
    public function getApplicantEducation()
    {
      return $this->ApplicantEducation;
    }

    /**
     * @param ApplicantEducation[] $ApplicantEducation
     * @return ArrayOfApplicantEducation
     */
    public function setApplicantEducation(array $ApplicantEducation = null)
    {
      $this->ApplicantEducation = $ApplicantEducation;
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
      return isset($this->ApplicantEducation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ApplicantEducation
     */
    public function offsetGet($offset)
    {
      return $this->ApplicantEducation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ApplicantEducation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ApplicantEducation[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ApplicantEducation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ApplicantEducation Return the current element
     */
    public function current()
    {
      return current($this->ApplicantEducation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ApplicantEducation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ApplicantEducation);
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
      reset($this->ApplicantEducation);
    }

    /**
     * Countable implementation
     *
     * @return ApplicantEducation Return count of elements
     */
    public function count()
    {
      return count($this->ApplicantEducation);
    }

}
