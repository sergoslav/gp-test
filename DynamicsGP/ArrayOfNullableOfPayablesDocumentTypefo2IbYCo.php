<?php

class ArrayOfNullableOfPayablesDocumentTypefo2IbYCo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PayablesDocumentType[] $PayablesDocumentType
     */
    protected $PayablesDocumentType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PayablesDocumentType[]
     */
    public function getPayablesDocumentType()
    {
      return $this->PayablesDocumentType;
    }

    /**
     * @param PayablesDocumentType[] $PayablesDocumentType
     * @return ArrayOfNullableOfPayablesDocumentTypefo2IbYCo
     */
    public function setPayablesDocumentType(array $PayablesDocumentType = null)
    {
      $this->PayablesDocumentType = $PayablesDocumentType;
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
      return isset($this->PayablesDocumentType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PayablesDocumentType
     */
    public function offsetGet($offset)
    {
      return $this->PayablesDocumentType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PayablesDocumentType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PayablesDocumentType[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PayablesDocumentType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PayablesDocumentType Return the current element
     */
    public function current()
    {
      return current($this->PayablesDocumentType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PayablesDocumentType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PayablesDocumentType);
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
      reset($this->PayablesDocumentType);
    }

    /**
     * Countable implementation
     *
     * @return PayablesDocumentType Return count of elements
     */
    public function count()
    {
      return count($this->PayablesDocumentType);
    }

}
