<?php

namespace Madonetr\Addresses\Contracts;

interface Address
{
    /**
     * Find an address by its id.
     *
     * @param int $id
     *
     * @throws \Madonetr\Address\Exceptions\AddressDoesNotExist
     *
     * @return \Madonetr\Address\Contracts\Role
     */
    public static function findById(int $id): self;
}
