<?php

namespace Modules\Settings\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings\SystemSettings;
use App\Http\Controllers\Controller;
use Modules\Settings\Transformers\SettingsResource;
use Modules\Settings\Http\Requests\SystemSettingsRequest;

class SettingsController extends Controller
{
    
    public function show(SystemSettings $settings)
    {
        return (new SettingsResource($settings))->additional($this->preparedResponse('show'));

        
    }

    public function update(
        SystemSettingsRequest $request,
        SystemSettings $settings
    ) {
        $settings->site_name = $request->site_name;
        $settings->company_email = $request->company_email;
        $settings->maintenance_mode = $request->maintenance_mode;

        $settings->save();

        return (new SettingsResource($settings))->additional($this->preparedResponse('update'));

    }

}
