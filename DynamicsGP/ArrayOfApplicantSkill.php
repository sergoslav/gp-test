<?php

class ArrayOfApplicantSkill implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ApplicantSkill[] $ApplicantSkill
     */
    protected $ApplicantSkill = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ApplicantSkill[]
     */
    public function getApplicantSkill()
    {
      return $this->ApplicantSkill;
    }

    /**
     * @param ApplicantSkill[] $ApplicantSkill
     * @return ArrayOfApplicantSkill
     */
    public function setApplicantSkill(array $ApplicantSkill = null)
    {
      $this->ApplicantSkill = $ApplicantSkill;
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
      return isset($this->ApplicantSkill[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ApplicantSkill
     */
    public function offsetGet($offset)
    {
      return $this->ApplicantSkill[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ApplicantSkill $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ApplicantSkill[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ApplicantSkill[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ApplicantSkill Return the current element
     */
    public function current()
    {
      return current($this->ApplicantSkill);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ApplicantSkill);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ApplicantSkill);
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
      reset($this->ApplicantSkill);
    }

    /**
     * Countable implementation
     *
     * @return ApplicantSkill Return count of elements
     */
    public function count()
    {
      return count($this->ApplicantSkill);
    }

}
