<?php

class ArrayOfUofMScheduleDetail implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var UofMScheduleDetail[] $UofMScheduleDetail
     */
    protected $UofMScheduleDetail = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UofMScheduleDetail[]
     */
    public function getUofMScheduleDetail()
    {
      return $this->UofMScheduleDetail;
    }

    /**
     * @param UofMScheduleDetail[] $UofMScheduleDetail
     * @return ArrayOfUofMScheduleDetail
     */
    public function setUofMScheduleDetail(array $UofMScheduleDetail = null)
    {
      $this->UofMScheduleDetail = $UofMScheduleDetail;
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
      return isset($this->UofMScheduleDetail[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UofMScheduleDetail
     */
    public function offsetGet($offset)
    {
      return $this->UofMScheduleDetail[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UofMScheduleDetail $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->UofMScheduleDetail[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->UofMScheduleDetail[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UofMScheduleDetail Return the current element
     */
    public function current()
    {
      return current($this->UofMScheduleDetail);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->UofMScheduleDetail);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->UofMScheduleDetail);
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
      reset($this->UofMScheduleDetail);
    }

    /**
     * Countable implementation
     *
     * @return UofMScheduleDetail Return count of elements
     */
    public function count()
    {
      return count($this->UofMScheduleDetail);
    }

}
