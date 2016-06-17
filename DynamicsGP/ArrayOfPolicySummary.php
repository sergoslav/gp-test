<?php

class ArrayOfPolicySummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PolicySummary[] $PolicySummary
     */
    protected $PolicySummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PolicySummary[]
     */
    public function getPolicySummary()
    {
      return $this->PolicySummary;
    }

    /**
     * @param PolicySummary[] $PolicySummary
     * @return ArrayOfPolicySummary
     */
    public function setPolicySummary(array $PolicySummary = null)
    {
      $this->PolicySummary = $PolicySummary;
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
      return isset($this->PolicySummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PolicySummary
     */
    public function offsetGet($offset)
    {
      return $this->PolicySummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PolicySummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PolicySummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PolicySummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PolicySummary Return the current element
     */
    public function current()
    {
      return current($this->PolicySummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PolicySummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PolicySummary);
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
      reset($this->PolicySummary);
    }

    /**
     * Countable implementation
     *
     * @return PolicySummary Return count of elements
     */
    public function count()
    {
      return count($this->PolicySummary);
    }

}
