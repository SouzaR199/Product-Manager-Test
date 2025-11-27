<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Enums\Status;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Plano Básico de Proteção Veicular',
                'description' => 'Cobertura contra roubo e furto, assistência 24h e rastreamento básico.',
                'price' => 89.90,
                'status' => Status::Ativo->value,
            ],
            [
                'name' => 'Plano Premium de Proteção Veicular',
                'description' => 'Cobertura completa, colisão, perda total, assistência completa e rastreamento avançado.',
                'price' => 159.90,
                'status' => Status::Ativo->value,
            ],
            [
                'name' => 'Rastreamento Via GPS',
                'description' => 'Dispositivo e acesso ao painel de monitoramento com atualização a cada 30 segundos.',
                'price' => 49.99,
                'status' => Status::Ativo->value,
            ],
            [
                'name' => 'Assistência 24h Completa',
                'description' => 'Inclui guincho, chaveiro, troca de pneu, recarga de bateria e auxílio em pane seca.',
                'price' => 39.90,
                'status' => Status::Ativo->value,
            ],
            [
                'name' => 'Instalação de Rastreador',
                'description' => 'Serviço de instalação presencial em oficina credenciada.',
                'price' => 120.00,
                'status' => Status::Inativo->value,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
