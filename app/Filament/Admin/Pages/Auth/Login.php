<?php

namespace App\Filament\Admin\Pages\Auth;

use Filament\Auth\Pages\Login as BaseLogin;

class Login extends BaseLogin
{
    protected static string $panelId = 'admin';

    public function getHeading(): string
    {
        return 'Acesso ao Painel Administrativo';
    }

    public function getSubheading(): ?string
    {
        return 'Entre com suas credenciais para continuar.';
    }
}
