<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Model\Laptop;
class sawController extends Controller
{
    //
    public function get_matrix_nilai()
    {
        # code...
        $laptop = Laptop::all();
        foreach ($laptop as $key) {
            # code...
            preg_match_all('/[0-9]{3,}/m', $key->ScreenResolution, $matches, PREG_SET_ORDER, 0);
            $key->l_inches = $key->Inches;
            $key->l_price = $key->Price_euros;
            $key->l_weight = (float) filter_var($key->Weight, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION );
            $key->l_ram = preg_replace('/\D/', '', $key->Ram);          
            $key->l_screenresolution = $matches[0][0];
        }
        return $laptop->all();
    }
    public function get_matrix_normalisasi()
    {
        # code...
        $options = \App\Model\Setting::getAllKeyValue();
        $c1 = json_decode($options['c1']);
        $c2 = json_decode($options['c2']);
        $c3 = json_decode($options['c3']);
        $c4 = json_decode($options['c4']);
        $c5 = json_decode($options['c5']);
        $laptop = $this->get_matrix_nilai();
        $temp_inches = [];
        $temp_price = [];
        $temp_weight = [];
        $temp_ram = [];
        $temp_screenresolution = [];
        foreach ($laptop as $key) {
            # code...
            $temp_inches[] = $key->l_inches;
            $temp_price[] = $key->l_price;
            $temp_weight[] = $key->l_weight;
            $temp_ram[] = $key->l_ram;
            $temp_screenresolution[] = $key->l_screenresolution;
        }
        foreach ($laptop as $key) {
            # code...
            $key->n_inches = ($c1->is_cost) ? min($temp_inches)/$key->l_inches : $key->l_inches/max($temp_inches);
            $key->n_weight = ($c2->is_cost) ? min($temp_weight)/$key->l_weight : $key->l_weight/max($temp_weight);
            $key->n_ram = ($c3->is_cost) ? min($temp_ram)/$key->l_ram : $key->l_ram/max($temp_ram);
            $key->n_screenresolution = ($c4->is_cost) ? min($temp_screenresolution)/$key->l_screenresolution : $key->l_screenresolution/max($temp_screenresolution);
            $key->n_price = ($c5->is_cost) ? min($temp_price)/$key->l_price : $key->l_price/max($temp_price);

        }
        return $laptop;
    }public function get_matrix_preferensi()
    {
        # code...
        $options = \App\Model\Setting::getAllKeyValue();
        $c1 = json_decode($options['c1']);
        $c2 = json_decode($options['c2']);
        $c3 = json_decode($options['c3']);
        $c4 = json_decode($options['c4']);
        $c5 = json_decode($options['c5']);
        $laptop = $this->get_matrix_normalisasi();
        foreach ($laptop as $key) {
            # code...
            $key->b_inches = $key->n_inches*$c1->weight;
            $key->b_weight = $key->n_weight*$c2->weight;
            $key->b_ram = $key->n_ram*$c3->weight;
            $key->b_screenresolution = $key->n_screenresolution*$c4->weight;
            $key->b_price = $key->n_price*$c5->weight;
            $key->nilai_preferensi = $key->b_inches+$key->b_weight+$key->b_ram+$key->b_screenresolution+$key->b_price;

        }
        return $laptop;
    }

    public function matrix_nilai()
    {
        # code...
        $laptop = $this->get_matrix_nilai();
        return Datatables::of($laptop)
                ->setRowId(function(Laptop $laptop){
                    return $laptop->id;
                })->make(true);
    }
    public function matrix_normalisasi()
    {
        # code...
        $laptop = $this->get_matrix_normalisasi();
        return Datatables::of($laptop)
                ->setRowId(function(Laptop $laptop){
                    return $laptop->id;
                })->make(true);
    }public function matrix_preferensi()
    {
        # code...
        $laptop = $this->get_matrix_preferensi();
        return Datatables::of($laptop)
                ->setRowId(function(Laptop $laptop){
                    return $laptop->id;
                })->addColumn('aksi','admin.saw.action-button2')
                ->rawColumns(['aksi'])->make(true);
    }
}
