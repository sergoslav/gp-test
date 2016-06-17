<?php

class ArrayOfNullableOfReturnMaterialAuthorizationTypefo2IbYCo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ReturnMaterialAuthorizationType[] $ReturnMaterialAuthorizationType
     */
    protected $ReturnMaterialAuthorizationType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReturnMaterialAuthorizationType[]
     */
    public function getReturnMaterialAuthorizationType()
    {
      return $this->ReturnMaterialAuthorizationType;
    }

    /**
     * @param ReturnMaterialAuthorizationType[] $ReturnMaterialAuthorizationType
     * @return ArrayOfNullableOfReturnMaterialAuthorizationTypefo2IbYCo
     */
    public function setReturnMaterialAuthorizationType(array $ReturnMaterialAuthorizationType = null)
    {
      $this->ReturnMaterialAuthorizationType = $ReturnMaterialAuthorizationType;
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
      return isset($this->ReturnMaterialAuthorizationType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ReturnMaterialAuthorizationType
     */
    public function offsetGet($offset)
    {
      return $this->ReturnMaterialAuthorizationType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ReturnMaterialAuthorizationType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ReturnMaterialAuthorizationType[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ReturnMaterialAuthorizationType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ReturnMaterialAuthorizationType Return the current element
     */
    public function current()
    {
      return current($this->ReturnMaterialAuthorizationType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ReturnMaterialAuthorizationType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ReturnMaterialAuthorizationType);
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
      reset($this->ReturnMaterialAuthorizationType);
    }

    /**
     * Countable implementation
     *
     * @return ReturnMaterialAuthorizationType Return count of elements
     */
    public function count()
    {
      return count($this->ReturnMaterialAuthorizationType);
    }

}
