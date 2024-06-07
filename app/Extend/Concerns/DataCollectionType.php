<?php

namespace App\Extend\Concerns;

/**
 * Contract for a custom data collection types.
 *
 * Types are added by adding a `type.php` file in the collection directory.
 * The type should return a new anonymous class. While they are currently not checked against this type,
 * it's recommended to extend this class to ensure compatible constructors and utilize automatic deserialization.
 */
abstract class DataCollectionType
{
    abstract public static function create(array $data): static;

    public function __construct(...$args) {
        foreach ($args as $key => $value) {
            $this->{$key} = $value;
        }
    }
}
