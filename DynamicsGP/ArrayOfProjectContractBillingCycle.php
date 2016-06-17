<?php

class ArrayOfProjectContractBillingCycle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProjectContractBillingCycle[] $ProjectContractBillingCycle
     */
    protected $ProjectContractBillingCycle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectContractBillingCycle[]
     */
    public function getProjectContractBillingCycle()
    {
      return $this->ProjectContractBillingCycle;
    }

    /**
     * @param ProjectContractBillingCycle[] $ProjectContractBillingCycle
     * @return ArrayOfProjectContractBillingCycle
     */
    public function setProjectContractBillingCycle(array $ProjectContractBillingCycle = null)
    {
      $this->ProjectContractBillingCycle = $ProjectContractBillingCycle;
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
      return isset($this->ProjectContractBillingCycle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProjectContractBillingCycle
     */
    public function offsetGet($offset)
    {
      return $this->ProjectContractBillingCycle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProjectContractBillingCycle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProjectContractBillingCycle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProjectContractBillingCycle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProjectContractBillingCycle Return the current element
     */
    public function current()
    {
      return current($this->ProjectContractBillingCycle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProjectContractBillingCycle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProjectContractBillingCycle);
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
      reset($this->ProjectContractBillingCycle);
    }

    /**
     * Countable implementation
     *
     * @return ProjectContractBillingCycle Return count of elements
     */
    public function count()
    {
      return count($this->ProjectContractBillingCycle);
    }

}
