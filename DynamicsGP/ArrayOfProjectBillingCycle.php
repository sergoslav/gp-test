<?php

class ArrayOfProjectBillingCycle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProjectBillingCycle[] $ProjectBillingCycle
     */
    protected $ProjectBillingCycle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectBillingCycle[]
     */
    public function getProjectBillingCycle()
    {
      return $this->ProjectBillingCycle;
    }

    /**
     * @param ProjectBillingCycle[] $ProjectBillingCycle
     * @return ArrayOfProjectBillingCycle
     */
    public function setProjectBillingCycle(array $ProjectBillingCycle = null)
    {
      $this->ProjectBillingCycle = $ProjectBillingCycle;
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
      return isset($this->ProjectBillingCycle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProjectBillingCycle
     */
    public function offsetGet($offset)
    {
      return $this->ProjectBillingCycle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProjectBillingCycle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProjectBillingCycle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProjectBillingCycle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProjectBillingCycle Return the current element
     */
    public function current()
    {
      return current($this->ProjectBillingCycle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProjectBillingCycle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProjectBillingCycle);
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
      reset($this->ProjectBillingCycle);
    }

    /**
     * Countable implementation
     *
     * @return ProjectBillingCycle Return count of elements
     */
    public function count()
    {
      return count($this->ProjectBillingCycle);
    }

}
