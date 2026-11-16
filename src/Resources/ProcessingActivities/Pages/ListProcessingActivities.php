<?php

namespace JeffersonGoncalves\Filament\LgpdRecords\Resources\ProcessingActivities\Pages;

use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\Filament\LgpdRecords\Resources\ProcessingActivities\ProcessingActivityResource;
use JeffersonGoncalves\LgpdRecords\RecordsManager;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ListProcessingActivities extends ListRecords
{
    protected static string $resource = ProcessingActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('export')
                ->label(ProcessingActivityResource::label('actions.export'))
                ->icon('heroicon-o-arrow-down-tray')
                ->color('gray')
                ->action(fn (): StreamedResponse => response()->streamDownload(function (): void {
                    echo json_encode(app(RecordsManager::class)->export(), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
                }, 'ropa-'.now()->format('Y-m-d').'.json', ['Content-Type' => 'application/json'])),
            CreateAction::make(),
        ];
    }
}
