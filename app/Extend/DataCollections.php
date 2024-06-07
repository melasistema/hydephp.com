<?php

declare(strict_types=1);

namespace App\Extend;

use Illuminate\Support\Str;
use Hyde\Facades\Filesystem;
use Hyde\Markdown\Models\FrontMatter;

/**
 * @experimental Typed data collections class extension.
 */
class DataCollections extends \Hyde\Support\DataCollections
{
    public static function yaml(string $name): static
    {
        if (static::hasType($name)) {
            return static::getTypedYaml($name);
        }

        return parent::yaml($name);
    }

    protected static function hasType(string $name): bool
    {
        return Filesystem::exists(self::getTypePath($name));
    }

    /**
     * @return static<\App\Extend\Concerns\DataCollectionType>
     */
    protected static function getTypedYaml(string $name): static
    {
        // Load the anonymous class and turn it into a new runtime class
        $className = self::getTypeClassname($name);

        if (class_exists($className)) {
            throw new \RuntimeException("Type class already exists: {$className}");
        }

        $type = include self::getTypePath($name);

        $newClassName = get_class($type);
        class_alias($newClassName, $className);

        /** @var \App\Extend\Concerns\DataCollectionType $className */
        return parent::yaml($name)->map(fn (FrontMatter $data) => new $className($data->toArray()));
    }

    protected static function getTypePath(string $name): string
    {
        return sprintf('%s/%s/type.php', static::$sourceDirectory, $name);
    }

    protected static function getTypeClassname(string $name): string
    {
        return 'App\\DataCollections\\Types\\'.Str::studly($name);
    }
}
