<?php

namespace App\Enums;

enum Status: string
{
    case Ativo = 'ativo';
    case Inativo = 'inativo';

    public function label(): string
    {
        return match($this) {
            self::Ativo => 'Ativo',
            self::Inativo => 'Inativo',
        };
    }

    public static function options(): array
    {
        return [
            self::Ativo->value => self::Ativo->label(),
            self::Inativo->value => self::Inativo->label(),
        ];
    }
}
