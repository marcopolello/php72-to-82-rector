<?php

declare(strict_types=1);

use Rector\Core\Configuration\Option;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;

return static function (Rector\Config\RectorConfig $rectorConfig): void {
    // ...existing code...
    $sets = [];

    if (defined('Rector\Set\ValueObject\SetList::PHP_82')) {
        $sets[] = SetList::PHP_82;
    } elseif (defined('Rector\Set\ValueObject\SetList::UP_TO_PHP_82')) {
        $sets[] = SetList::UP_TO_PHP_82;
    }

    if (defined('Rector\Set\ValueObject\LevelSetList::UP_TO_PHP_82')) {
        $sets[] = LevelSetList::UP_TO_PHP_82;
    } elseif (defined('Rector\Set\ValueObject\LevelSetList::UP_TO_PHP_80')) {
        // fallback a UP_TO_PHP_80 se UP_TO_PHP_82 non esiste
        $sets[] = LevelSetList::UP_TO_PHP_80;
    }

    if (! empty($sets)) {
        $rectorConfig->sets($sets);
    }
    // ...existing code...
    $rectorConfig->paths([
        __DIR__ . '/src',
    ]);

    $rectorConfig->parameters()->set(Option::AUTO_IMPORT_NAMES, true);
    // ...existing code...
};