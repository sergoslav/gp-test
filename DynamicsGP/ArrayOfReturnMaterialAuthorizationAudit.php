<?php

class ArrayOfReturnMaterialAuthorizationAudit implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ReturnMaterialAuthorizationAudit[] $ReturnMaterialAuthorizationAudit
     */
    protected $ReturnMaterialAuthorizationAudit = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReturnMaterialAuthorizationAudit[]
     */
    public function getReturnMaterialAuthorizationAudit()
    {
      return $this->ReturnMaterialAuthorizationAudit;
    }

    /**
     * @param ReturnMaterialAuthorizationAudit[] $ReturnMaterialAuthorizationAudit
     * @return ArrayOfReturnMaterialAuthorizationAudit
     */
    public function setReturnMaterialAuthorizationAudit(array $ReturnMaterialAuthorizationAudit = null)
    {
      $this->ReturnMaterialAuthorizationAudit = $ReturnMaterialAuthorizationAudit;
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
      return isset($this->ReturnMaterialAuthorizationAudit[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ReturnMaterialAuthorizationAudit
     */
    public function offsetGet($offset)
    {
      return $this->ReturnMaterialAuthorizationAudit[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ReturnMaterialAuthorizationAudit $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ReturnMaterialAuthorizationAudit[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ReturnMaterialAuthorizationAudit[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ReturnMaterialAuthorizationAudit Return the current element
     */
    public function current()
    {
      return current($this->ReturnMaterialAuthorizationAudit);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ReturnMaterialAuthorizationAudit);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ReturnMaterialAuthorizationAudit);
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
      reset($this->ReturnMaterialAuthorizationAudit);
    }

    /**
     * Countable implementation
     *
     * @return ReturnMaterialAuthorizationAudit Return count of elements
     */
    public function count()
    {
      return count($this->ReturnMaterialAuthorizationAudit);
    }

}
