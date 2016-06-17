<?php

class ArrayOfPaymentCardType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PaymentCardType[] $PaymentCardType
     */
    protected $PaymentCardType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PaymentCardType[]
     */
    public function getPaymentCardType()
    {
      return $this->PaymentCardType;
    }

    /**
     * @param PaymentCardType[] $PaymentCardType
     * @return ArrayOfPaymentCardType
     */
    public function setPaymentCardType(array $PaymentCardType = null)
    {
      $this->PaymentCardType = $PaymentCardType;
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
      return isset($this->PaymentCardType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PaymentCardType
     */
    public function offsetGet($offset)
    {
      return $this->PaymentCardType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PaymentCardType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PaymentCardType[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PaymentCardType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PaymentCardType Return the current element
     */
    public function current()
    {
      return current($this->PaymentCardType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PaymentCardType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PaymentCardType);
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
      reset($this->PaymentCardType);
    }

    /**
     * Countable implementation
     *
     * @return PaymentCardType Return count of elements
     */
    public function count()
    {
      return count($this->PaymentCardType);
    }

}
