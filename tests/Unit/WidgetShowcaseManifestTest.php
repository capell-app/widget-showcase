<?php

declare(strict_types=1);

it('keeps composer and manifest members in exact parity', function (): void {
    $root = dirname(__DIR__, 2);
    $composer = capell_json_file_array($root . '/composer.json');
    $manifest = capell_json_file_array($root . '/capell.json');
    $screenshotContract = capell_json_file_array($root . '/docs/screenshots.json');
    $composerRequirements = widgetShowcaseStringMap($composer, 'require');
    $composerMembers = array_keys(array_filter(
        $composerRequirements,
        static fn (string $constraint, string $package): bool => $package !== 'php',
        ARRAY_FILTER_USE_BOTH,
    ));
    sort($composerMembers);
    $manifestMembers = widgetShowcaseStringList($manifest, 'dependencies.requires');
    sort($manifestMembers);
    $screenshotEntries = widgetShowcaseArrayList($screenshotContract, 'entries');
    $firstScreenshot = $screenshotEntries[0] ?? [];

    expect($composerMembers)->toBe($manifestMembers)
        ->and(widgetShowcaseString($manifest, 'kind'))->toBe('bundle')
        ->and(widgetShowcaseArray($manifest, 'providers'))->each->toBe([])
        ->and(widgetShowcaseArray($manifest, 'contributes'))->toBe([])
        ->and(widgetShowcaseArray($manifest, 'healthChecks'))->toBe([])
        ->and(widgetShowcaseArray($manifest, 'surfaces'))->toBe([])
        ->and(widgetShowcaseArrayList($manifest, 'marketplace.screenshots'))->toHaveCount(1)
        ->and($firstScreenshot['surface'] ?? null)->toBe('marketplace')
        ->and($firstScreenshot['targetType'] ?? null)->toBe('marketplace-asset')
        ->and($firstScreenshot['required'] ?? null)->toBeTrue()
        ->and(file_exists($root . '/docs/screenshots/extension-card.svg'))->toBeTrue()
        ->and(widgetShowcaseStringList($manifest, 'marketplace.categories'))->not->toContain('frontend')
        ->and(widgetShowcaseString($manifest, 'description'))->toContain('no runtime surface')
        ->and((string) file_get_contents($root . '/README.md'))->toContain('adds no runtime surface itself');
});

/**
 * @param  array<array-key, mixed>  $payload
 * @return array<array-key, mixed>
 */
function widgetShowcaseArray(array $payload, string $key): array
{
    $value = data_get($payload, $key);

    throw_unless(is_array($value), RuntimeException::class, "Widget Showcase metadata [{$key}] must be an array.");

    return $value;
}

/**
 * @param  array<array-key, mixed>  $payload
 * @return list<array<string, mixed>>
 */
function widgetShowcaseArrayList(array $payload, string $key): array
{
    $values = widgetShowcaseArray($payload, $key);
    $validated = [];

    foreach ($values as $value) {
        throw_unless(is_array($value), RuntimeException::class, "Widget Showcase metadata [{$key}] must contain arrays.");

        $validated[] = $value;
    }

    return $validated;
}

/** @param array<array-key, mixed> $payload */
function widgetShowcaseString(array $payload, string $key): string
{
    $value = data_get($payload, $key);

    throw_unless(is_string($value), RuntimeException::class, "Widget Showcase metadata [{$key}] must be a string.");

    return $value;
}

/**
 * @param  array<array-key, mixed>  $payload
 * @return list<string>
 */
function widgetShowcaseStringList(array $payload, string $key): array
{
    $values = widgetShowcaseArray($payload, $key);
    $validated = [];

    foreach ($values as $value) {
        throw_unless(is_string($value), RuntimeException::class, "Widget Showcase metadata [{$key}] must contain strings.");

        $validated[] = $value;
    }

    return $validated;
}

/**
 * @param  array<array-key, mixed>  $payload
 * @return array<string, string>
 */
function widgetShowcaseStringMap(array $payload, string $key): array
{
    $values = widgetShowcaseArray($payload, $key);
    $validated = [];

    foreach ($values as $name => $value) {
        throw_unless(is_string($name) && is_string($value), RuntimeException::class, "Widget Showcase metadata [{$key}] must contain string pairs.");

        $validated[$name] = $value;
    }

    return $validated;
}
