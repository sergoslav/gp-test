<?php

class ArrayOfReturnMaterialAuthorizationDistribution implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ReturnMaterialAuthorizationDistribution[] $ReturnMaterialAuthorizationDistribution
     */
    protected $ReturnMaterialAuthorizationDistribution = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReturnMaterialAuthorizationDistribution[]
     */
    public function getReturnMaterialAuthorizationDistribution()
    {
      return $this->ReturnMaterialAuthorizationDistribution;
    }

    /**
     * @param ReturnMaterialAuthorizationDistribution[] $ReturnMaterialAuthorizationDistribution
     * @return ArrayOfReturnMaterialAuthorizationDistribution
     */
    public function setReturnMaterialAuthorizationDistribution(array $ReturnMaterialAuthorizationDistribution = null)
    {
      $this->ReturnMaterialAuthorizationDistribution = $ReturnMaterialAuthorizationDistribution;
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
      return isset($this->ReturnMaterialAuthorizationDistribution[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ReturnMaterialAuthorizationDistribution
     */
    public function offsetGet($offset)
    {
      return $this->ReturnMaterialAuthorizationDistribution[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ReturnMaterialAuthorizationDistribution $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ReturnMaterialAuthorizationDistribution[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ReturnMaterialAuthorizationDistribution[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ReturnMaterialAuthorizationDistribution Return the current element
     */
    public function current()
    {
      return current($this->ReturnMaterialAuthorizationDistribution);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ReturnMaterialAuthorizationDistribution);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ReturnMaterialAuthorizationDistribution);
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
      reset($this->ReturnMaterialAuthorizationDistribution);
    }

    /**
     * Countable implementation
     *
     * @return ReturnMaterialAuthorizationDistribution Return count of elements
     */
    public function count()
    {
      return count($this->ReturnMaterialAuthorizationDistribution);
    }

}
