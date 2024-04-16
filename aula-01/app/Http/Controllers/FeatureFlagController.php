<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeatureFlag;

class FeatureFlagController extends Controller
{
    public function index()
    {
        $featureFlags = FeatureFlag::all();
        return view('feature_flags.index', compact('featureFlags'));
    }
}
