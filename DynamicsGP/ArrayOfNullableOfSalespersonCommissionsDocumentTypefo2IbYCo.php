<?php

class ArrayOfNullableOfSalespersonCommissionsDocumentTypefo2IbYCo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalespersonCommissionsDocumentType[] $SalespersonCommissionsDocumentType
     */
    protected $SalespersonCommissionsDocumentType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalespersonCommissionsDocumentType[]
     */
    public function getSalespersonCommissionsDocumentType()
    {
      return $this->SalespersonCommissionsDocumentType;
    }

    /**
     * @param SalespersonCommissionsDocumentType[] $SalespersonCommissionsDocumentType
     * @return ArrayOfNullableOfSalespersonCommissionsDocumentTypefo2IbYCo
     */
    public function setSalespersonCommissionsDocumentType(array $SalespersonCommissionsDocumentType = null)
    {
      $this->SalespersonCommissionsDocumentType = $SalespersonCommissionsDocumentType;
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
      return isset($this->SalespersonCommissionsDocumentType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalespersonCommissionsDocumentType
     */
    public function offsetGet($offset)
    {
      return $this->SalespersonCommissionsDocumentType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalespersonCommissionsDocumentType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalespersonCommissionsDocumentType[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalespersonCommissionsDocumentType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalespersonCommissionsDocumentType Return the current element
     */
    public function current()
    {
      return current($this->SalespersonCommissionsDocumentType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalespersonCommissionsDocumentType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalespersonCommissionsDocumentType);
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
      reset($this->SalespersonCommissionsDocumentType);
    }

    /**
     * Countable implementation
     *
     * @return SalespersonCommissionsDocumentType Return count of elements
     */
    public function count()
    {
      return count($this->SalespersonCommissionsDocumentType);
    }

}
