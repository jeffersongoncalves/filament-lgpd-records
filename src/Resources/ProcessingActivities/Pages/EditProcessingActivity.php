<?php

namespace JeffersonGoncalves\Filament\LgpdRecords\Resources\ProcessingActivities\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use JeffersonGoncalves\Filament\LgpdRecords\Resources\ProcessingActivities\ProcessingActivityResource;

class EditProcessingActivity extends EditRecord
{
    protected static string $resource = ProcessingActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
