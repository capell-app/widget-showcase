<?php

declare(strict_types=1);

it('keeps composer and manifest members in exact parity', function (): void {
    $root = dirname(__DIR__, 2);
    $composer = json_decode((string) file_get_contents($root . '/composer.json'), true, flags: JSON_THROW_ON_ERROR);
    $manifest = json_decode((string) file_get_contents($root . '/capell.json'), true, flags: JSON_THROW_ON_ERROR);
    $composerMembers = array_keys(array_filter(
        $composer['require'],
        static fn (string $constraint, string $package): bool => $package !== 'php',
        ARRAY_FILTER_USE_BOTH,
    ));
    sort($composerMembers);
    $manifestMembers = $manifest['dependencies']['requires'];
    sort($manifestMembers);

    expect($composerMembers)->toBe($manifestMembers)
        ->and($manifest['kind'])->toBe('bundle')
        ->and($manifest['providers'])->each->toBe([])
        ->and($manifest['contributes'])->toBe([])
        ->and($manifest['healthChecks'])->toBe([])
        ->and($manifest['surfaces'])->toBe([])
        ->and($manifest['marketplace']['screenshots'])->toBe([])
        ->and($manifest['marketplace']['categories'])->not->toContain('frontend')
        ->and($manifest['description'])->toContain('no runtime surface')
        ->and((string) file_get_contents($root . '/README.md'))->toContain('does not add a showcase page');
});
