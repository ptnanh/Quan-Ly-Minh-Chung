<?php

namespace AppCharts;

use ConsoleTVsChartsClassesChartjsChart;

class TestChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->options([
            'legend' => [
                'display' => true,
                'labels' => [
                    'fontColor' => 'rgb(255, 99, 132)'
                ],
            ],

        ]);

    }
}