<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;

use App\Models\Campus;
use App\Models\Agent;
use App\Models\Feedback;
use App\Models\Session;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

class Analytics extends Controller
{
  public function index()
  {
      $countAgents = Agent::count();
      $countCampuses = Campus::count();
      $countSessions = Session::count();
      $countTasks = Task::count();

      $campusesWithFeedbacks = Campus::with(['feedbacks' => function($query) {
          $query->select('campus_id',
              DB::raw('SUM(happy) AS total_happy'),
              DB::raw('SUM(neutral) AS total_neutral'),
              DB::raw('SUM(bad) AS total_bad')
          )->groupBy('campus_id');
      }])->get();

      $campusNames = $campusesWithFeedbacks->pluck('name')->toArray();

      $feedbackTotals = $campusesWithFeedbacks->map(function ($campus) {
          $feedbacks = $campus->feedbacks->first(); // Assuming there's only one feedback entry per campus
          return [
              $feedbacks ? $feedbacks->total_happy : 0,
              $feedbacks ? $feedbacks->total_neutral : 0,
              $feedbacks ? $feedbacks->total_bad : 0,
          ];
      });

      return view('content.dashboard.dashboards-analytics', [
          'countAgents' => $countAgents,
          'countCampuses' => $countCampuses,
          'countSessions' => $countSessions,
          'countTasks' => $countTasks,
          'campusNames' => $campusNames,
          'feedbackTotals' => $feedbackTotals,
      ]);
  }
}
