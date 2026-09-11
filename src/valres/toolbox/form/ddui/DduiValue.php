<?php

declare(strict_types=1);

namespace valres\toolbox\form\ddui;

use valres\toolbox\form\ddui\cereal\DynamicValue;
use valres\toolbox\form\ddui\cereal\DynamicValueBool;
use valres\toolbox\form\ddui\cereal\DynamicValueDouble;
use valres\toolbox\form\ddui\cereal\DynamicValueLong;
use valres\toolbox\form\ddui\cereal\DynamicValueMap;
use valres\toolbox\form\ddui\cereal\DynamicValueString;

final class DduiValue {
    private function __construct() {}

    /**
     * @param array<string, DynamicValue|null> $entries
     */
    public static function map(array $entries): DynamicValueMap {
        return new DynamicValueMap($entries);
    }

    public static function bool(bool $value): DynamicValueBool {
        return new DynamicValueBool($value);
    }

    public static function string(string $value): DynamicValueString {
        return new DynamicValueString($value);
    }

    public static function long(int $value): DynamicValueLong {
        return new DynamicValueLong($value);
    }

    public static function double(float $value): DynamicValueDouble {
        return new DynamicValueDouble($value);
    }
}
