<?php

class ArrayOfSalesTerritoryHistory implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesTerritoryHistory[] $SalesTerritoryHistory
     */
    protected $SalesTerritoryHistory = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesTerritoryHistory[]
     */
    public function getSalesTerritoryHistory()
    {
      return $this->SalesTerritoryHistory;
    }

    /**
     * @param SalesTerritoryHistory[] $SalesTerritoryHistory
     * @return ArrayOfSalesTerritoryHistory
     */
    public function setSalesTerritoryHistory(array $SalesTerritoryHistory = null)
    {
      $this->SalesTerritoryHistory = $SalesTerritoryHistory;
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
      return isset($this->SalesTerritoryHistory[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesTerritoryHistory
     */
    public function offsetGet($offset)
    {
      return $this->SalesTerritoryHistory[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesTerritoryHistory $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SalesTerritoryHistory[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SalesTerritoryHistory[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesTerritoryHistory Return the current element
     */
    public function current()
    {
      return current($this->SalesTerritoryHistory);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesTerritoryHistory);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesTerritoryHistory);
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
      reset($this->SalesTerritoryHistory);
    }

    /**
     * Countable implementation
     *
     * @return SalesTerritoryHistory Return count of elements
     */
    public function count()
    {
      return count($this->SalesTerritoryHistory);
    }

}
