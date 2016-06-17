<?php

class ArrayOfApplicantInterviewItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ApplicantInterviewItem[] $ApplicantInterviewItem
     */
    protected $ApplicantInterviewItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ApplicantInterviewItem[]
     */
    public function getApplicantInterviewItem()
    {
      return $this->ApplicantInterviewItem;
    }

    /**
     * @param ApplicantInterviewItem[] $ApplicantInterviewItem
     * @return ArrayOfApplicantInterviewItem
     */
    public function setApplicantInterviewItem(array $ApplicantInterviewItem = null)
    {
      $this->ApplicantInterviewItem = $ApplicantInterviewItem;
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
      return isset($this->ApplicantInterviewItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ApplicantInterviewItem
     */
    public function offsetGet($offset)
    {
      return $this->ApplicantInterviewItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ApplicantInterviewItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ApplicantInterviewItem[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ApplicantInterviewItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ApplicantInterviewItem Return the current element
     */
    public function current()
    {
      return current($this->ApplicantInterviewItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ApplicantInterviewItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ApplicantInterviewItem);
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
      reset($this->ApplicantInterviewItem);
    }

    /**
     * Countable implementation
     *
     * @return ApplicantInterviewItem Return count of elements
     */
    public function count()
    {
      return count($this->ApplicantInterviewItem);
    }

}
