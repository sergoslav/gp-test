<?php

class ArrayOfServiceDistribution implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ServiceDistribution[] $ServiceDistribution
     */
    protected $ServiceDistribution = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceDistribution[]
     */
    public function getServiceDistribution()
    {
      return $this->ServiceDistribution;
    }

    /**
     * @param ServiceDistribution[] $ServiceDistribution
     * @return ArrayOfServiceDistribution
     */
    public function setServiceDistribution(array $ServiceDistribution = null)
    {
      $this->ServiceDistribution = $ServiceDistribution;
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
      return isset($this->ServiceDistribution[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ServiceDistribution
     */
    public function offsetGet($offset)
    {
      return $this->ServiceDistribution[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ServiceDistribution $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ServiceDistribution[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ServiceDistribution[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ServiceDistribution Return the current element
     */
    public function current()
    {
      return current($this->ServiceDistribution);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServiceDistribution);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServiceDistribution);
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
      reset($this->ServiceDistribution);
    }

    /**
     * Countable implementation
     *
     * @return ServiceDistribution Return count of elements
     */
    public function count()
    {
      return count($this->ServiceDistribution);
    }

}
