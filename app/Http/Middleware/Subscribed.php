<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Subscribed
{
  /**
   * Handle an incoming request.
   */
  public function handle(Request $request, Closure $next): Response
  {
    $user = $request->user();

    if (!$user) {
      return redirect('/login');
    }

    $team = $user->currentTeam;

    if (!$team) {
      return redirect('/subscribe');
    }

    // Check if the team has an active subscription
    if (!$team->subscribed()) {
      return redirect('/subscribe');
    }

    return $next($request);
  }
}
