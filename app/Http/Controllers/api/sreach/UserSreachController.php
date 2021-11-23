<?php

namespace App\Http\Controllers\api\sreach;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSreachController extends Controller
{
    public function index(Request $request)
    {
        if (!$query = $request->get('q', '')) {
            return response()->json([]);
        }

        return User::where(DB::raw('LOWER(name)'), 'LIKE', '%' . Str::lower($query) . '%')->get(['id', 'name']);
    }
}
