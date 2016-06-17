<?php

class ArrayOfSalesDocumentSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesDocumentSummary[] $SalesDocumentSummary
     */
    protected $SalesDocumentSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesDocumentSummary[]
     */
    public function getSalesDocumentSummary()
    {
      return $this->SalesDocumentSummary;
    }

    /**
     * @param SalesDocumentSummary[] $SalesDocumentSummary
     * @return ArrayOfSalesDocumentSummary
     */
    public function setSalesDocumentSummary(array $SalesDocumentSummary = null)
    {
      $this->SalesDocumentSummary = $SalesDocumentSummary;
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
      return isset($this->SalesDocumentSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesDocumentSummary
     */
    public function offsetGet($offset)
    {
      return $this->SalesDocumentSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesDocumentSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesDocumentSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesDocumentSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesDocumentSummary Return the current element
     */
    public function current()
    {
      return current($this->SalesDocumentSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesDocumentSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesDocumentSummary);
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
      reset($this->SalesDocumentSummary);
    }

    /**
     * Countable implementation
     *
     * @return SalesDocumentSummary Return count of elements
     */
    public function count()
    {
      return count($this->SalesDocumentSummary);
    }

}
