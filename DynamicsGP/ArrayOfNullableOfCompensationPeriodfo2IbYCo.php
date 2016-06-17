<?php

class ArrayOfNullableOfCompensationPeriodfo2IbYCo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CompensationPeriod[] $CompensationPeriod
     */
    protected $CompensationPeriod = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CompensationPeriod[]
     */
    public function getCompensationPeriod()
    {
      return $this->CompensationPeriod;
    }

    /**
     * @param CompensationPeriod[] $CompensationPeriod
     * @return ArrayOfNullableOfCompensationPeriodfo2IbYCo
     */
    public function setCompensationPeriod(array $CompensationPeriod = null)
    {
      $this->CompensationPeriod = $CompensationPeriod;
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
      return isset($this->CompensationPeriod[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CompensationPeriod
     */
    public function offsetGet($offset)
    {
      return $this->CompensationPeriod[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CompensationPeriod $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CompensationPeriod[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CompensationPeriod[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CompensationPeriod Return the current element
     */
    public function current()
    {
      return current($this->CompensationPeriod);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CompensationPeriod);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CompensationPeriod);
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
      reset($this->CompensationPeriod);
    }

    /**
     * Countable implementation
     *
     * @return CompensationPeriod Return count of elements
     */
    public function count()
    {
      return count($this->CompensationPeriod);
    }

}
