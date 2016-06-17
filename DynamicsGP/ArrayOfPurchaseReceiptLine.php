<?php

class ArrayOfPurchaseReceiptLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PurchaseReceiptLine[] $PurchaseReceiptLine
     */
    protected $PurchaseReceiptLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PurchaseReceiptLine[]
     */
    public function getPurchaseReceiptLine()
    {
      return $this->PurchaseReceiptLine;
    }

    /**
     * @param PurchaseReceiptLine[] $PurchaseReceiptLine
     * @return ArrayOfPurchaseReceiptLine
     */
    public function setPurchaseReceiptLine(array $PurchaseReceiptLine = null)
    {
      $this->PurchaseReceiptLine = $PurchaseReceiptLine;
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
      return isset($this->PurchaseReceiptLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PurchaseReceiptLine
     */
    public function offsetGet($offset)
    {
      return $this->PurchaseReceiptLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PurchaseReceiptLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PurchaseReceiptLine[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PurchaseReceiptLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PurchaseReceiptLine Return the current element
     */
    public function current()
    {
      return current($this->PurchaseReceiptLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PurchaseReceiptLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PurchaseReceiptLine);
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
      reset($this->PurchaseReceiptLine);
    }

    /**
     * Countable implementation
     *
     * @return PurchaseReceiptLine Return count of elements
     */
    public function count()
    {
      return count($this->PurchaseReceiptLine);
    }

}
