<?php

class ArrayOfUofMScheduleSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var UofMScheduleSummary[] $UofMScheduleSummary
     */
    protected $UofMScheduleSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UofMScheduleSummary[]
     */
    public function getUofMScheduleSummary()
    {
      return $this->UofMScheduleSummary;
    }

    /**
     * @param UofMScheduleSummary[] $UofMScheduleSummary
     * @return ArrayOfUofMScheduleSummary
     */
    public function setUofMScheduleSummary(array $UofMScheduleSummary = null)
    {
      $this->UofMScheduleSummary = $UofMScheduleSummary;
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
      return isset($this->UofMScheduleSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UofMScheduleSummary
     */
    public function offsetGet($offset)
    {
      return $this->UofMScheduleSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UofMScheduleSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->UofMScheduleSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->UofMScheduleSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UofMScheduleSummary Return the current element
     */
    public function current()
    {
      return current($this->UofMScheduleSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->UofMScheduleSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->UofMScheduleSummary);
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
      reset($this->UofMScheduleSummary);
    }

    /**
     * Countable implementation
     *
     * @return UofMScheduleSummary Return count of elements
     */
    public function count()
    {
      return count($this->UofMScheduleSummary);
    }

}
