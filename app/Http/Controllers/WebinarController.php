<?php

namespace App\Http\Controllers;

use App\Models\Webinar;
use Illuminate\Http\Request;

class WebinarController extends Controller
{
    public function get_webinars(Request $request)
    {
        $status = $request->input("status");

        if ($status !== null) {
            $webinars = Webinar::where('status', $status)->get();
        } else {
            $webinars = Webinar::all();
        }

        if ($webinars->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Webinar bulunamadı',
            ], 404);
        }

        $webinarsData = $webinars->toArray();
        return response()->json([
            'success' => true,
            'webinars' => $webinarsData,
            'message' => 'Webinar listesi başarıyla getirildi',
        ]);
    }
}
