<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AlerteResource;
use App\Models\Enrole;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Validator;

class EnroleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'uniq' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Les données fournies étaient invalides.' . $validator->errors()->first(),
                'errors' => $validator->errors(),
            ], 422);
        }

        $enrole = Enrole::with("Personne_a_prevenir")
        ->with("Antecedants")
        ->where("uniq", $request->get("uniq"))->get([
            'id',
            'nom',
            'prenom',
            'date_naissance',
            'lieu_naissance',
            'sexe',
            'ville',
            'quartier',
            'telephone',
            'package',
            'avatar',
            'balance',
            'groupe_sanguin',
            'electrophorese',
            'maladie_particuliere',
            'created_at',
        ])->first();

        return response()->json(["message" => 'Information enrolé.', "enrole" => new AlerteResource($enrole)]);

    }
}
