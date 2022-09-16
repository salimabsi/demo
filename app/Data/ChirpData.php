<?php

namespace App\Data;

use Carbon\Carbon;
use Hybridly\Support\Data\DataResource;

final class ChirpData extends DataResource
{
    public static array $authorizations = ['comment'];

    public function __construct(
        public readonly string $id,
        public readonly string $body,
        public readonly UserData $author,
        public readonly Carbon $created_at,
    ) {
    }
}