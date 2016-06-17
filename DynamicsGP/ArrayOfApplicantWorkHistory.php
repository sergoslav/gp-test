<?php

class ArrayOfApplicantWorkHistory implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ApplicantWorkHistory[] $ApplicantWorkHistory
     */
    protected $ApplicantWorkHistory = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ApplicantWorkHistory[]
     */
    public function getApplicantWorkHistory()
    {
      return $this->ApplicantWorkHistory;
    }

    /**
     * @param ApplicantWorkHistory[] $ApplicantWorkHistory
     * @return ArrayOfApplicantWorkHistory
     */
    public function setApplicantWorkHistory(array $ApplicantWorkHistory = null)
    {
      $this->ApplicantWorkHistory = $ApplicantWorkHistory;
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
      return isset($this->ApplicantWorkHistory[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ApplicantWorkHistory
     */
    public function offsetGet($offset)
    {
      return $this->ApplicantWorkHistory[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ApplicantWorkHistory $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ApplicantWorkHistory[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ApplicantWorkHistory[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ApplicantWorkHistory Return the current element
     */
    public function current()
    {
      return current($this->ApplicantWorkHistory);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ApplicantWorkHistory);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ApplicantWorkHistory);
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
      reset($this->ApplicantWorkHistory);
    }

    /**
     * Countable implementation
     *
     * @return ApplicantWorkHistory Return count of elements
     */
    public function count()
    {
      return count($this->ApplicantWorkHistory);
    }

}
