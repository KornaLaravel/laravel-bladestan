<?php

declare(strict_types=1);

namespace TomasVotruba\Bladestan\TemplateCompiler\Contract;

/**
 * @api
 */
interface UsedVariableNamesResolverInterface
{
    /**
     * @return string[]
     */
    public function resolveFromFilePath(string $filePath): array;
}