<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LocationController extends Controller
{
    public function getApiData()
    {
        $response = Http::get('https://zrsz-3scale-apicast-staging.apps.ocp.elasticbox.eu/sifranti/v1/sifrant-upravne-enote?user_key=29ba714c3da31f479d1834339605f0a5');

        $api_locations = json_decode($response->body());

        if ($response->successful()) {
            foreach ($api_locations as $api_location_data) {
                $location = new Location;
                $location->id_up_enote = $api_location_data->IdupEnote;
                $location->sf_up_enote = $api_location_data->SfupEnote;
                $location->naziv = $api_location_data->Naziv;
                $location->naslov = $api_location_data->Naslov ?? null;
                $location->id_poste = $api_location_data->Idposte ?? null;
                $location->oen = $api_location_data->Oen;
                $location->sf_ue_ajpes = $api_location_data->SfUeajpes;
                $location->id_stat_regije = $api_location_data->IdstatRegije;
                $location->status_sf = $api_location_data->StatusSf;
                $location->dat_sp = $api_location_data->Datsp;
                $location->save();
            }
        }
        return "DONE";
    }
}
