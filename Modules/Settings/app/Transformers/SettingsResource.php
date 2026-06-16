<?php

namespace Modules\Settings\Transformers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SettingsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
         return [
            'site_name' => $this->site_name,
            'company_email' => $this->company_email,
            'maintenance_mode' => $this->maintenance_mode,
        ];
    }
}
