<?php

class ArrayOfPayablesDocumentSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PayablesDocumentSummary[] $PayablesDocumentSummary
     */
    protected $PayablesDocumentSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PayablesDocumentSummary[]
     */
    public function getPayablesDocumentSummary()
    {
      return $this->PayablesDocumentSummary;
    }

    /**
     * @param PayablesDocumentSummary[] $PayablesDocumentSummary
     * @return ArrayOfPayablesDocumentSummary
     */
    public function setPayablesDocumentSummary(array $PayablesDocumentSummary = null)
    {
      $this->PayablesDocumentSummary = $PayablesDocumentSummary;
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
      return isset($this->PayablesDocumentSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PayablesDocumentSummary
     */
    public function offsetGet($offset)
    {
      return $this->PayablesDocumentSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PayablesDocumentSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PayablesDocumentSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PayablesDocumentSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PayablesDocumentSummary Return the current element
     */
    public function current()
    {
      return current($this->PayablesDocumentSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PayablesDocumentSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PayablesDocumentSummary);
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
      reset($this->PayablesDocumentSummary);
    }

    /**
     * Countable implementation
     *
     * @return PayablesDocumentSummary Return count of elements
     */
    public function count()
    {
      return count($this->PayablesDocumentSummary);
    }

}
