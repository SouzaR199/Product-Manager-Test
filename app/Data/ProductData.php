<?php

namespace App\Data;

use App\Enums\Status;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Attributes\Validation\StringType;
use Spatie\LaravelData\Attributes\Validation\NumericType;
use Spatie\LaravelData\Attributes\Validation\EnumType;

class ProductData extends Data
{
    public function __construct(
        #[Required, StringType]
        public string $name,

        #[StringType]
        public ?string $description,

        #[Required, NumericType]
        public float $price,

        #[Required, EnumType]
        public Status $status,
    ) {}
}
