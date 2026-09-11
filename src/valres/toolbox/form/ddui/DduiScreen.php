<?php

declare(strict_types=1);

namespace valres\toolbox\form\ddui;

use valres\toolbox\form\ddui\cereal\DynamicValueMap;
use pocketmine\player\Player;

interface DduiScreen {
    public function getScreenId(): string;

    public function serializeData(): DynamicValueMap;

    public function handleUpdate(Player $player, string $path, bool|string|float $value): bool;

    public function handleClose(Player $player, int $reason): void;
}
