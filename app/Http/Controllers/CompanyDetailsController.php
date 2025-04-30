<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CompanyDetail;

use App\Http\Requests\UpdateCompanyDetailsRequest;

class CompanyDetailsController extends Controller
{
    public function index() {

        $companyDetail = CompanyDetail::first();

        return view('company.index')->with('company', $companyDetail);
    }

    public function update(UpdateCompanyDetailsRequest $request) {

        $companyDetail = CompanyDetail::first();

        $data = $request->only(['company_name', 'description', 'email', 'telephone', 'mobile', 'additional_tel', 'fax', 'registration_number', 'address1', 'address2', 'city', 'country', 'map', 'facebook', 'instagram', 'youtube']);

        $companyDetail->update($data);

        session()->flash('success', 'Latest changes have been updated successfully');

        return redirect(route('company.index'));

    }
}
