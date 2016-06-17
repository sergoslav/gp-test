<?php

class ArrayOfServiceCallDocumentAudit implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ServiceCallDocumentAudit[] $ServiceCallDocumentAudit
     */
    protected $ServiceCallDocumentAudit = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceCallDocumentAudit[]
     */
    public function getServiceCallDocumentAudit()
    {
      return $this->ServiceCallDocumentAudit;
    }

    /**
     * @param ServiceCallDocumentAudit[] $ServiceCallDocumentAudit
     * @return ArrayOfServiceCallDocumentAudit
     */
    public function setServiceCallDocumentAudit(array $ServiceCallDocumentAudit = null)
    {
      $this->ServiceCallDocumentAudit = $ServiceCallDocumentAudit;
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
      return isset($this->ServiceCallDocumentAudit[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ServiceCallDocumentAudit
     */
    public function offsetGet($offset)
    {
      return $this->ServiceCallDocumentAudit[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ServiceCallDocumentAudit $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ServiceCallDocumentAudit[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ServiceCallDocumentAudit[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ServiceCallDocumentAudit Return the current element
     */
    public function current()
    {
      return current($this->ServiceCallDocumentAudit);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServiceCallDocumentAudit);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServiceCallDocumentAudit);
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
      reset($this->ServiceCallDocumentAudit);
    }

    /**
     * Countable implementation
     *
     * @return ServiceCallDocumentAudit Return count of elements
     */
    public function count()
    {
      return count($this->ServiceCallDocumentAudit);
    }

}
