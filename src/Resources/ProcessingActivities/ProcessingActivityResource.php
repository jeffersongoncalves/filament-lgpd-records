<?php

namespace JeffersonGoncalves\Filament\LgpdRecords\Resources\ProcessingActivities;

use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use JeffersonGoncalves\Filament\LgpdRecords\LgpdRecordsPlugin;
use JeffersonGoncalves\Filament\LgpdRecords\Resources\ProcessingActivities\Pages\CreateProcessingActivity;
use JeffersonGoncalves\Filament\LgpdRecords\Resources\ProcessingActivities\Pages\EditProcessingActivity;
use JeffersonGoncalves\Filament\LgpdRecords\Resources\ProcessingActivities\Pages\ListProcessingActivities;
use JeffersonGoncalves\Lgpd\Enums\LegalBasis;
use JeffersonGoncalves\Lgpd\Lgpd;
use JeffersonGoncalves\LgpdRecords\Models\ProcessingActivity;

class ProcessingActivityResource extends Resource
{
    protected static ?string $model = ProcessingActivity::class;

    public static function form(Form $form): Form
    {
        return $form
            ->columns(2)
            ->schema([
                TextInput::make('name')
                    ->label(static::label('fields.name'))
                    ->required()
                    ->maxLength(255),
                Select::make('legal_basis')
                    ->label(static::label('fields.legal_basis'))
                    ->options(static::legalBases()),
                Textarea::make('purpose')
                    ->label(static::label('fields.purpose'))
                    ->required()
                    ->columnSpanFull(),
                TagsInput::make('data_subjects')
                    ->label(static::label('fields.data_subjects'))
                    ->placeholder(static::label('placeholders.data_subjects')),
                TagsInput::make('data_categories')
                    ->label(static::label('fields.data_categories'))
                    ->helperText(static::label('help.data_categories')),
                CheckboxList::make('models')
                    ->label(static::label('fields.models'))
                    ->helperText(static::label('help.models'))
                    ->options(fn (): array => collect(app(Lgpd::class)->models())
                        ->mapWithKeys(fn (string $model): array => [$model => class_basename($model)])
                        ->all())
                    ->columns(3)
                    ->columnSpanFull(),
                Repeater::make('recipients')
                    ->label(static::label('fields.recipients'))
                    ->schema([
                        TextInput::make('name')
                            ->label(static::label('fields.recipient_name'))
                            ->required(),
                        Select::make('role')
                            ->label(static::label('fields.role'))
                            ->options(static::options('roles')),
                        TextInput::make('country')
                            ->label(static::label('fields.country'))
                            ->maxLength(2),
                    ])
                    ->columns(3)
                    ->defaultItems(0)
                    ->columnSpanFull(),
                Repeater::make('international_transfers')
                    ->label(static::label('fields.international_transfers'))
                    ->schema([
                        TextInput::make('country')
                            ->label(static::label('fields.country'))
                            ->required()
                            ->maxLength(2),
                        Select::make('mechanism')
                            ->label(static::label('fields.mechanism'))
                            ->options(static::options('mechanisms')),
                    ])
                    ->columns(2)
                    ->defaultItems(0)
                    ->columnSpanFull(),
                TextInput::make('retention')
                    ->label(static::label('fields.retention')),
                Textarea::make('security_measures')
                    ->label(static::label('fields.security_measures')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label(static::label('fields.name'))
                    ->searchable()
                    ->sortable(),
                TextColumn::make('legal_basis')
                    ->label(static::label('fields.legal_basis'))
                    ->formatStateUsing(fn (LegalBasis $state): string => static::legalBases()[$state->value])
                    ->placeholder('-'),
                TextColumn::make('data_subjects')
                    ->label(static::label('fields.data_subjects'))
                    ->badge(),
                TextColumn::make('models')
                    ->label(static::label('fields.models'))
                    ->formatStateUsing(fn (string $state): string => class_basename($state))
                    ->badge()
                    ->color('gray'),
                TextColumn::make('international_transfers')
                    ->label(static::label('fields.international'))
                    ->state(fn (ProcessingActivity $record): array => array_column($record->international_transfers ?? [], 'country'))
                    ->badge()
                    ->color('warning')
                    ->placeholder('-'),
            ])
            ->defaultSort('name')
            ->filters([
                SelectFilter::make('legal_basis')
                    ->label(static::label('fields.legal_basis'))
                    ->options(static::legalBases()),
            ])
            ->actions([
                EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProcessingActivities::route('/'),
            'create' => CreateProcessingActivity::route('/create'),
            'edit' => EditProcessingActivity::route('/{record}/edit'),
        ];
    }

    /**
     * @return array<string, string>
     */
    public static function legalBases(): array
    {
        return collect(LegalBasis::cases())
            ->mapWithKeys(fn (LegalBasis $basis): array => [$basis->value => static::label("legal_basis.{$basis->value}")])
            ->all();
    }

    /**
     * @return array<string, string>
     */
    protected static function options(string $group): array
    {
        return (array) __("filament-lgpd-records::filament-lgpd-records.{$group}");
    }

    public static function label(string $key): string
    {
        return __("filament-lgpd-records::filament-lgpd-records.{$key}");
    }

    public static function getModelLabel(): string
    {
        return static::label('resource.label');
    }

    public static function getPluralModelLabel(): string
    {
        return static::label('resource.plural_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return LgpdRecordsPlugin::get()->getNavigationGroup();
    }

    public static function getNavigationSort(): ?int
    {
        return LgpdRecordsPlugin::get()->getNavigationSort();
    }

    public static function getNavigationIcon(): ?string
    {
        return LgpdRecordsPlugin::get()->getNavigationIcon();
    }

    public static function getSlug(): string
    {
        return LgpdRecordsPlugin::get()->getSlug();
    }
}
