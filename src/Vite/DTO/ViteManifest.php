<?php

declare(strict_types=1);

namespace LunaPress\FrontendContracts\Vite\DTO;

final readonly class ViteManifest
{
    /**
     * @param array<string, ViteManifestItem> $items
     */
    public function __construct(
        public array $items = [],
    ) {
    }
}
