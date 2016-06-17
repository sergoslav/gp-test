<?php

class ArrayOfNullableOfTaxDetailBasefo2IbYCo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TaxDetailBase[] $TaxDetailBase
     */
    protected $TaxDetailBase = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TaxDetailBase[]
     */
    public function getTaxDetailBase()
    {
      return $this->TaxDetailBase;
    }

    /**
     * @param TaxDetailBase[] $TaxDetailBase
     * @return ArrayOfNullableOfTaxDetailBasefo2IbYCo
     */
    public function setTaxDetailBase(array $TaxDetailBase = null)
    {
      $this->TaxDetailBase = $TaxDetailBase;
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
      return isset($this->TaxDetailBase[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TaxDetailBase
     */
    public function offsetGet($offset)
    {
      return $this->TaxDetailBase[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TaxDetailBase $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->TaxDetailBase[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->TaxDetailBase[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TaxDetailBase Return the current element
     */
    public function current()
    {
      return current($this->TaxDetailBase);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TaxDetailBase);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TaxDetailBase);
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
      reset($this->TaxDetailBase);
    }

    /**
     * Countable implementation
     *
     * @return TaxDetailBase Return count of elements
     */
    public function count()
    {
      return count($this->TaxDetailBase);
    }

}
