<?php

namespace Modules\Report\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Modules\Report\TaxReport;
use Modules\Report\SalesReport;
use Modules\Report\SearchReport;
use Modules\Report\CouponsReport;
use Illuminate\Routing\Controller;
use Modules\Report\ShippingReport;
use Modules\Report\ProductsViewReport;
use Modules\Report\ProductsStockReport;
use Modules\Report\CustomersOrderReport;
use Modules\Report\ProductsPurchaseReport;

class ReportController extends Controller
{
    /**
     * Array of available reports.
     *
     * @var array
     */
    private $reports = [
        'products_view_report' => ProductsViewReport::class,
        'search_report' => SearchReport::class,
    ];

    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $type = $request->query('type');

        if (! $this->reportTypeExists($type)) {
            return redirect()->route('admin.reports.index', ['type' => 'coupons_report']);
        }

        return $this->report($type)->render($request);
    }

    /**
     * Determine if the report type exists.
     *
     * @param string $type
     * @return bool
     */
    private function reportTypeExists($type)
    {
        return array_key_exists($type, $this->reports);
    }

    /**
     * Returns a new instance of the given type of report.
     *
     * @param string $type
     * @return mixed
     */
    private function report($type)
    {
        return new $this->reports[$type];
    }
}
