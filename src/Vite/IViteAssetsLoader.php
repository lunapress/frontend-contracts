<?php

declare(strict_types=1);

namespace LunaPress\FrontendContracts\Vite;

use LunaPress\Wp\AssetsContracts\DTO\ScriptModuleDependency;

interface IViteAssetsLoader
{
    /**
     * @param IViteEntryPoint[] $entryPoints
     * @param array<ScriptModuleDependency|string> $dependencies
     */
    public function connect(array $entryPoints, bool $isAdmin = false, array $dependencies = []): void;
}
