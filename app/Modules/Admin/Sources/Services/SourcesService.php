<?php
/**
 * Created by PhpStorm.
 * User: note
 * Date: 26.12.2020
 * Time: 17:55
 */

namespace App\Modules\Admin\Sources\Services;


use App\Modules\Admin\Sources\Models\Source;
use App\Modules\Admin\Sources\Requests\SourcesRequest;
use Illuminate\Http\Request;

class SourcesService
{

    public function getSources()
    {
        return Source::all();
    }

    public function save(Request $request, Source $source)
    {
        $source->fill($request->only($source->getFillable()));
        $source->save();
        return $source;
    }



}