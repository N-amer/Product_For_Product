<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\EnvironmentalSavings;
use App\Models\User;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $co2Savings = EnvironmentalSavings::select('user_id', DB::raw('SUM(co2_savings) as total_savings'))
            ->groupBy('user_id')
            ->get();


            
        $participations = DB::table('online_communities')
        ->select(DB::raw('DATE(participation_date) as date'), DB::raw('COUNT(*) as count'))
        ->groupBy('date')
        ->get();
        
        $labels = $participations->pluck('date');
        $countData = $participations->pluck('count');
        
        $savings = DB::table('environmental_savings')->get();


        $energySavings = DB::table('environmental_savings')
                        ->select(DB::raw("DATE_FORMAT(date, '%Y-%m') as month"), DB::raw("SUM(energy_savings) as total_energy_savings"))
                        ->groupBy('month')
                        ->get();
        // needs to be changed to the current user
        $donatedTree = User::find(1)->treedonations->pluck('trees_donated');

        $energy_labels = $energySavings->pluck('date');
        $data = $energySavings->pluck('energy_savings');
        //return view('dashboard', ['categories' => Category::all()]);
        return view('dashboard', [
                                    'categories' => Category::all(),
                                    'energySavings' => $energy_labels, 
                                    'data' => $data, 'labels' => $labels, 
                                    'countData' => $countData, 'savings' => $savings,
                                    'doneted_tree' => $donatedTree
                                ]);
    }
}
