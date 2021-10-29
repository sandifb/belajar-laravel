<?php

declare(strict_types=1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $data = DB::table('kantor')
            ->join('penerimaan_dummy', 'kantor.kpp', '=', 'penerimaan_dummy.admin')
            ->select(
                'kantor.kpp',
                DB::raw('sum(penerimaan_dummy.total) as nominal'),
            )
            ->groupBy(
                'kantor.kpp',
            )
            ->where('penerimaan_dummy.tahunbayar', 2021)
            ->where('penerimaan_dummy.kdmap', 411121)
            ->get();

        $label = [];
        $dataset = [];
        foreach ($data as $item) {
            $label[] = $item->kpp;
            $dataset[] = $item->nominal;
        }

        return Chartisan::build()
            ->labels($label)
            ->dataset('Penerimaan', $dataset);
    }
}
