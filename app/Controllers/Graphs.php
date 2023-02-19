<?php

namespace App\Controllers;

class Graphs extends BaseController
{

	public function graph_flot()
	{
		$data['IconMain']   = "bar-chart-o";
		$data['page_title_main'] = "Graph";
		return view('graph-flot', $data);
	}
	public function graph_morris()
	{
		$data['IconMain']   = "bar-chart-o";
		$data['page_title_main'] = "Graph";
		return view('graph-morris', $data);
	}
	public function graph_sparkline_charts()
	{
		$data['IconMain']   = "bar-chart-o";
		$data['page_title_main'] = "Graph";
		return view('graph-sparkline-charts', $data);
	}
	public function graph_easypie_charts()
	{
		$data['IconMain']   = "bar-chart-o";
		$data['page_title_main'] = "Graph";
		return view('graph-easypie-charts', $data);
	}
	public function graph_dygraphs()
	{
		$data['IconMain']   = "bar-chart-o";
		$data['page_title_main'] = "Graph";
		return view('graph-dygraphs', $data);
	}
	public function graph_chartjs()
	{
		$data['IconMain']   = "bar-chart-o";
		$data['page_title_main'] = "Graph";
		return view('graph-chartjs', $data);
	}
	public function graph_hchartable()
	{
		$data['IconMain']   = "bar-chart-o";
		$data['page_title_main'] = "Graph";
		return view('graph-hchartable', $data);
	}
}
