<?php

declare(strict_types=1);

namespace LunaPress\FrontendContracts\Vite;

use LunaPress\FrontendContracts\Vite\DTO\ViteManifest;
use LunaPress\FrontendContracts\Vite\DTO\ViteManifestItem;

interface ViteManifestReader
{
    public function getManifest(): ViteManifest;
    public function getManifestItem(string $name): ?ViteManifestItem;
}
