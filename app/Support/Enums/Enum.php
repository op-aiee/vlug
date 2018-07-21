<?php

namespace App\Support\Enums;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;
use ReflectionClass;
use RuntimeException;

abstract class Enum
{
    public static function all(): Collection
    {
        $reflection = new ReflectionClass(static::class);

        $constants = $reflection->getConstants();

        return collect($constants);
    }

    public static function has($string): bool
    {
        return static::all()->contains($string);
    }

    public static function required(): string
    {
        return 'required|'.static::optional();
    }

    public static function optional()
    {
        return 'in:'.static::all()->implode(',');
    }

    public static function apiResource()
    {
        return new JsonResource(
            self::all()->values()
        );
    }

    public static function assert($string): void
    {
        if (! static::has($string)) {
            throw new RuntimeException('Not a valid '.class_basename(static::class).' enum: '.$string);
        }
    }
}
