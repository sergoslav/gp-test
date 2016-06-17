<?php

class ArrayOfNullableOfTaxDetailTypefo2IbYCo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TaxDetailType[] $TaxDetailType
     */
    protected $TaxDetailType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TaxDetailType[]
     */
    public function getTaxDetailType()
    {
      return $this->TaxDetailType;
    }

    /**
     * @param TaxDetailType[] $TaxDetailType
     * @return ArrayOfNullableOfTaxDetailTypefo2IbYCo
     */
    public function setTaxDetailType(array $TaxDetailType = null)
    {
      $this->TaxDetailType = $TaxDetailType;
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
      return isset($this->TaxDetailType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TaxDetailType
     */
    public function offsetGet($offset)
    {
      return $this->TaxDetailType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TaxDetailType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->TaxDetailType[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->TaxDetailType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TaxDetailType Return the current element
     */
    public function current()
    {
      return current($this->TaxDetailType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TaxDetailType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TaxDetailType);
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
      reset($this->TaxDetailType);
    }

    /**
     * Countable implementation
     *
     * @return TaxDetailType Return count of elements
     */
    public function count()
    {
      return count($this->TaxDetailType);
    }

}
