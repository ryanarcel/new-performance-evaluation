<?php

use App\Models\ToolItem;

it('creates a tool item through the factory', function () {
    $toolItem = ToolItem::factory()->create();

    // Check if it is a valid ToolItem instance and has a valid ID
    expect($toolItem)->toBeInstanceOf(ToolItem::class);
    expect($toolItem->id)->toBeGreaterThan(0);
});