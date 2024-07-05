<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Holder;
use App\Models\Beneficiary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContractController extends Controller
{
    public function contrato(Request $request)
    {

        $request->validate([
            // Validaciones para Contract
            'n_contract' => 'required|string',
            'affiliation_date' => 'required|date',
            'quota_value' => 'required|numeric',
            'site_issuance' => 'required|string',
            'advisor' => 'required|string',
            'payment_period' => 'required|string',
            // 'contract_state' => 'required|string',

            // Validaciones para Holder
            'holder_identification' => 'required|string',
            'holder_name' => 'required|string',
            'holder_date_of_birth' => 'required|date',
            'holder_phone_number' => 'required|string',
            'holder_address' => 'required|string',
            'holder_shipping_location' => 'required|string',
            // 'holder_state' => 'required|string',

            // Validaciones para Beneficiaries
            'beneficiaries.*.identification' => 'required|string',
            'beneficiaries.*.name' => 'required|string',
            'beneficiaries.*.date_of_birth' => 'required|date',
            // 'beneficiaries.*.state' => 'required|string',
        ]);

        $estado = 'activo';
        $beneficiarios = 'Beneficiario';
        $titulares = 'Titular';

        // Crear el contrato
        Contract::create([
            'n_contract' => $request->n_contract,
            'affiliation_date' => $request->affiliation_date,
            'quota_value' => $request->quota_value,
            'site_issuance' => $request->site_issuance,
            'advisor' => $request->advisor,
            // 'holder_id' => $request->holder_identification,
            'payment_period' => $request->payment_period,
            'state' => $estado,
        ]);

        // Crear el titular
        Holder::create([
            'identification' => $request->holder_identification,
            'name' => $request->holder_name,
            'date_of_birth' => $request->holder_date_of_birth,
            'phone_number' => $request->holder_phone_number,
            'address' => $request->holder_address,
            'shipping_location' => $request->holder_shipping_location,
            'state' => $estado,
            'n_contract' => $request->n_contract,
            'role' => $titulares,
        ]);
            // $contract->holder()->save($holder);

            // Crear los beneficiarios
            // foreach ($request->beneficiaries as $beneficiaryData) {
            //     $beneficiary = new Beneficiary($beneficiaryData);
            //     $beneficiary->state = $estado;
            //     $contract->beneficiaries()->save($beneficiary);
            // }

        return response()->json(['success' => 'Contrato Registrado']);
        // return redirect()->route('administrator')->with('success', 'Contract created successfully.');
        
    }
}