<?php

use Filament\FilamentServiceProvider;
use Filament\Forms\FormsServiceProvider;
use Filament\Support\SupportServiceProvider;
use Filament\Tables\TablesServiceProvider;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\Concerns\CreatesApplication;
use Orchestra\Testbench\Foundation\Application;

$basePathLocator = new class()
{
    use CreatesApplication;
};

$app = (new Application($basePathLocator::applicationBasePath()))
    ->configure([
        'enables_package_discoveries' => true,
    ])
    ->createApplication();

$app->register(LivewireServiceProvider::class);
$app->register(FilamentServiceProvider::class);
$app->register(FormsServiceProvider::class);
$app->register(SupportServiceProvider::class);
$app->register(TablesServiceProvider::class);

return $app;
