<?php

class ArrayOfApplicantApplication implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ApplicantApplication[] $ApplicantApplication
     */
    protected $ApplicantApplication = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ApplicantApplication[]
     */
    public function getApplicantApplication()
    {
      return $this->ApplicantApplication;
    }

    /**
     * @param ApplicantApplication[] $ApplicantApplication
     * @return ArrayOfApplicantApplication
     */
    public function setApplicantApplication(array $ApplicantApplication = null)
    {
      $this->ApplicantApplication = $ApplicantApplication;
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
      return isset($this->ApplicantApplication[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ApplicantApplication
     */
    public function offsetGet($offset)
    {
      return $this->ApplicantApplication[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ApplicantApplication $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ApplicantApplication[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ApplicantApplication[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ApplicantApplication Return the current element
     */
    public function current()
    {
      return current($this->ApplicantApplication);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ApplicantApplication);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ApplicantApplication);
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
      reset($this->ApplicantApplication);
    }

    /**
     * Countable implementation
     *
     * @return ApplicantApplication Return count of elements
     */
    public function count()
    {
      return count($this->ApplicantApplication);
    }

}
