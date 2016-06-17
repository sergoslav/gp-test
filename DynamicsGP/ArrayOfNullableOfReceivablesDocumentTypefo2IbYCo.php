<?php

class ArrayOfNullableOfReceivablesDocumentTypefo2IbYCo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ReceivablesDocumentType[] $ReceivablesDocumentType
     */
    protected $ReceivablesDocumentType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReceivablesDocumentType[]
     */
    public function getReceivablesDocumentType()
    {
      return $this->ReceivablesDocumentType;
    }

    /**
     * @param ReceivablesDocumentType[] $ReceivablesDocumentType
     * @return ArrayOfNullableOfReceivablesDocumentTypefo2IbYCo
     */
    public function setReceivablesDocumentType(array $ReceivablesDocumentType = null)
    {
      $this->ReceivablesDocumentType = $ReceivablesDocumentType;
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
      return isset($this->ReceivablesDocumentType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ReceivablesDocumentType
     */
    public function offsetGet($offset)
    {
      return $this->ReceivablesDocumentType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ReceivablesDocumentType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ReceivablesDocumentType[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ReceivablesDocumentType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ReceivablesDocumentType Return the current element
     */
    public function current()
    {
      return current($this->ReceivablesDocumentType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ReceivablesDocumentType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ReceivablesDocumentType);
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
      reset($this->ReceivablesDocumentType);
    }

    /**
     * Countable implementation
     *
     * @return ReceivablesDocumentType Return count of elements
     */
    public function count()
    {
      return count($this->ReceivablesDocumentType);
    }

}
