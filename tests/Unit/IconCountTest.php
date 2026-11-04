<?php

declare(strict_types=1);

/**
 * The vendored set is complete: every variant directory holds at least the
 * number of SVGs upstream @primer/octicons 19.33.0 ships for it, after the
 * exclusions ATTRIBUTION.md lists. A sync that silently drops icons fails here.
 */
function octicons_files(): string
{
    return dirname(__DIR__, 2) . '/resources/assets/svg/files';
}

/** @return array<string, int> variant => SVG count at upstream 19.33.0 */
function octicons_count_floor(): array
{
    return [
        '16px' => 372,
        '24px' => 344,
    ];
}

it(description: 'ships at least the upstream count in every variant', closure: function () {
    foreach (octicons_count_floor() as $variant => $floor) {
        $count = count(glob(octicons_files() . "/{$variant}/*.svg") ?: []);
        expect($count)->toBeGreaterThanOrEqual($floor, "{$variant} holds {$count} SVGs, under the floor of {$floor}");
    }
});

it(description: 'ships no directory the variants do not name', closure: function () {
    $dirs = array_map('basename', glob(octicons_files() . '/*', GLOB_ONLYDIR) ?: []);
    sort($dirs);
    $expected = array_keys(octicons_count_floor());
    sort($expected);
    expect($dirs)->toBe($expected);
});

it(description: 'ships none of the upstream icons excluded as trademarks', closure: function () {
    $excluded = ['mark-github', 'logo-github', 'logo-gist', 'lockup-github', 'copilot', 'copilot-error', 'copilot-warning', 'dependabot', 'hubot'];
    $inspected = 0;
    foreach (array_keys(octicons_count_floor()) as $variant) {
        foreach ($excluded as $name) {
            $inspected++;
            expect(is_file(octicons_files() . "/{$variant}/{$name}.svg"))->toBeFalse("{$variant}/{$name}.svg is a trademark and must not ship");
        }
    }
    expect($inspected)->toBe(count($excluded) * count(octicons_count_floor()));
});
