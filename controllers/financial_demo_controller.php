<?php
/**
	CakePHP FusionCharts Plugin
	Copyright (C) 2009-3827 dr. Hannibal Lecter (http://lecterror.com/)

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

/**
 * @property FusionChartsComponent $FusionCharts
 */
class FinancialDemoController extends FusionChartsAppController
{
	var $name = 'FinancialDemo';
	var $components = array('FusionCharts.FusionCharts');
	var $helpers = array('FusionCharts.FusionCharts');
	var $uses = array();
	var $layout = 'chart.demo';

	function candlestick()
	{
		$this->FusionCharts->create
			(
				'Candlestick Chart',
				array
				(
					'type' => 'Candlestick', // doesn't work??
					'width' => 600,
					'height' => 350,
					'id' => ''
				)
			);

		$this->FusionCharts->setChartParams
			(
				'Candlestick Chart',
				array
				(
					'caption'			=> 'Sales',
					'PYAxisName'		=> 'Revenue',
					'SYAxisName'		=> 'Quantity',
					'numberPrefix'		=> '$',
					'showValues'		=> '0',
					'numDivLines'		=> '4',
					'formatNumberScale'	=> '0',
					'decimalPrecision'	=> '0',
					'anchorSides'		=> '10',
					'anchorRadius'		=> '3',
					'anchorBorderColor'	=> '009900'
				)
			);

		$this->FusionCharts->addCategories
			(
				'Candlestick Chart',
				array
				(
					'March',
					'April',
					'May',
					'June',
					'July'
				)
			);

		$this->FusionCharts->addDatasets
			(
				'Candlestick Chart',
				array
				(
					'Product A' => array
					(
						'params' => array('color' => 'AFD8F8', 'showValues' => '0'),
						'data' => array
						(
							array('value' => '25601.34'),
							array('value' => '20148.82'),
							array('value' => '17372.76'),
							array('value' => '35407.15'),
							array('value' => '38105.68')
						)
					),
					'Product B' => array
					(
						'params' => array('color' => 'F6BD0F', 'showValues' => '0'),
						'data' => array
						(
							array('value' => '57401.85'),
							array('value' => '41941.19'),
							array('value' => '45263.37'),
							array('value' => '117320.16'),
							array('value' => '114845.27')
						)
					),
					'Total Quantity' => array
					(
						'params' => array('color' => '8BBA00', 'showValues' => '0', 'parentYAxis' => 'S'),
						'data' => array
						(
							array('value' => '45000'),
							array('value' => '44835'),
							array('value' => '42835'),
							array('value' => '77557'),
							array('value' => '92633')
						)
					)
				)
			);
	}
}
