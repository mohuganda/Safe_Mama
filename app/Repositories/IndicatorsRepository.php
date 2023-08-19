<?php

namespace App\Repositories;

use App\Models\Author;
use App\Models\Kpi;
use App\Models\KpiData;
use Illuminate\Http\Request;

class IndicatorsRepository
{

    public function get(Request $request)
    {

        $rows_count = ($request->rows) ? $request->rows : 24;
        $kpis = Kpi::with('subjectArea');
        $kpis->orderBy('id', 'desc');
        $kpis->get();

        if ($request->term) {
            $kpis->where('name', 'like', '%' . $request->term . '%');
            $kpis->orWhere('name', 'like', '%' . $request->term . '%');
        }

        $kpis = $kpis->paginate($rows_count);

        return $kpis;
    }

    public function save(Request $request)
    {

        $kpi = new Kpi();
        $kpi->name         = $request->name;
        $kpi->description  = $request->description;
        $kpi->subject_area = $request->subject_area;
        $kpi->frequency    = $request->frequency;
        $kpi->save();

        return $kpi;
    }

    public function get_data(Request $request)
    {
        $data = KpiData::paginate(20);
        return $data;
    }

    public function get_kpi_data()
    {
        $data = KpiData::all();
        return $data;
    }

    public function find($id)
    {
        return Kpi::find($id);
    }

    public function delete($id)
    {
        return Kpi::destroy($id);
    }


    // Get Subject Areas For Ajax
    public function get_subject_areas()
    {

        $subject_areas = Author::all();
        return $subject_areas;
    }
}
