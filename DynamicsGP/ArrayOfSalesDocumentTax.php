<?php

class ArrayOfSalesDocumentTax implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesDocumentTax[] $SalesDocumentTax
     */
    protected $SalesDocumentTax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesDocumentTax[]
     */
    public function getSalesDocumentTax()
    {
      return $this->SalesDocumentTax;
    }

    /**
     * @param SalesDocumentTax[] $SalesDocumentTax
     * @return ArrayOfSalesDocumentTax
     */
    public function setSalesDocumentTax(array $SalesDocumentTax = null)
    {
      $this->SalesDocumentTax = $SalesDocumentTax;
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
      return isset($this->SalesDocumentTax[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesDocumentTax
     */
    public function offsetGet($offset)
    {
      return $this->SalesDocumentTax[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesDocumentTax $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesDocumentTax[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesDocumentTax[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesDocumentTax Return the current element
     */
    public function current()
    {
      return current($this->SalesDocumentTax);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesDocumentTax);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesDocumentTax);
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
      reset($this->SalesDocumentTax);
    }

    /**
     * Countable implementation
     *
     * @return SalesDocumentTax Return count of elements
     */
    public function count()
    {
      return count($this->SalesDocumentTax);
    }

}
