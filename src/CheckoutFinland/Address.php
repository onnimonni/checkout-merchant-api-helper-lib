<?php
namespace CheckoutFinland;

class Address
{
    public function expose(): array
    {
        return get_object_vars($this);
    }
}
