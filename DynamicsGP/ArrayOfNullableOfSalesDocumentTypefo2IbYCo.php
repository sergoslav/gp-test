<?php

class ArrayOfNullableOfSalesDocumentTypefo2IbYCo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesDocumentType[] $SalesDocumentType
     */
    protected $SalesDocumentType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesDocumentType[]
     */
    public function getSalesDocumentType()
    {
      return $this->SalesDocumentType;
    }

    /**
     * @param SalesDocumentType[] $SalesDocumentType
     * @return ArrayOfNullableOfSalesDocumentTypefo2IbYCo
     */
    public function setSalesDocumentType(array $SalesDocumentType = null)
    {
      $this->SalesDocumentType = $SalesDocumentType;
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
      return isset($this->SalesDocumentType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesDocumentType
     */
    public function offsetGet($offset)
    {
      return $this->SalesDocumentType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesDocumentType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesDocumentType[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesDocumentType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesDocumentType Return the current element
     */
    public function current()
    {
      return current($this->SalesDocumentType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesDocumentType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesDocumentType);
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
      reset($this->SalesDocumentType);
    }

    /**
     * Countable implementation
     *
     * @return SalesDocumentType Return count of elements
     */
    public function count()
    {
      return count($this->SalesDocumentType);
    }

}
