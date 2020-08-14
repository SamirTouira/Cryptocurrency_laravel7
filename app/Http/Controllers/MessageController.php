<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if ($request->ajax()) {
            $this->validate($request, [
                'email' => 'bail|required|email',
                'message' => 'bail|required|max:250'
            ]);
            // Gestion des données
            return response ()->json ();
        }
        abort(404);
    }
}
