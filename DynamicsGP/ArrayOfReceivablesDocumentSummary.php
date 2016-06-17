<?php

class ArrayOfReceivablesDocumentSummary implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ReceivablesDocumentSummary[] $ReceivablesDocumentSummary
     */
    protected $ReceivablesDocumentSummary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReceivablesDocumentSummary[]
     */
    public function getReceivablesDocumentSummary()
    {
      return $this->ReceivablesDocumentSummary;
    }

    /**
     * @param ReceivablesDocumentSummary[] $ReceivablesDocumentSummary
     * @return ArrayOfReceivablesDocumentSummary
     */
    public function setReceivablesDocumentSummary(array $ReceivablesDocumentSummary = null)
    {
      $this->ReceivablesDocumentSummary = $ReceivablesDocumentSummary;
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
      return isset($this->ReceivablesDocumentSummary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ReceivablesDocumentSummary
     */
    public function offsetGet($offset)
    {
      return $this->ReceivablesDocumentSummary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ReceivablesDocumentSummary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ReceivablesDocumentSummary[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ReceivablesDocumentSummary[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ReceivablesDocumentSummary Return the current element
     */
    public function current()
    {
      return current($this->ReceivablesDocumentSummary);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ReceivablesDocumentSummary);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ReceivablesDocumentSummary);
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
      reset($this->ReceivablesDocumentSummary);
    }

    /**
     * Countable implementation
     *
     * @return ReceivablesDocumentSummary Return count of elements
     */
    public function count()
    {
      return count($this->ReceivablesDocumentSummary);
    }

}
