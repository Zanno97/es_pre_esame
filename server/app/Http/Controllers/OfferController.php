<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function list(){
        return Offer::all();
    }

    public function detail($id){
        $offer = Offer::where('id', $id)->first();
        return $offer;
    }

    public function create(Request $request){
        $offerData = json_decode($request->getContent());

        $offer = new Offer();

        $offer->programminglanguage = $offerData->programminglanguage;
        $offer->companyoffer = $offerData->companyoffer;
        $offer->icon = $offerData->icon;
        $offer->experience = $offerData->experience;
        $offer->location = $offerData->location;
        $offer->description = $offerData->description;
        $offer->ral = $offerData->ral;

        $offer->save();

        return response()->json($offer, 201);
    }

    public function modify(Request $request, $id) {
        $offer = Offer::where("id", $id)->first();

        $offerData = json_decode($request->getContent());

        $offer->programminglanguage = $offerData->programminglanguage;
        $offer->companyoffer = $offerData->companyoffer;
        $offer->icon = $offerData->icon;
        $offer->experience = $offerData->experience;
        $offer->location = $offerData->location;
        $offer->description = $offerData->description;
        $offer->ral = $offerData->ral;

        $offer->save();

        return response()->json($offer, 200);
    }

    public function destroy($id) {
        return Offer::destroy($id);
    }
}
