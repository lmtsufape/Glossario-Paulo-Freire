<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\DB;
use App\Verbete;
use Closure;

class Verbetes
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $letras = DB::select("select l, count(id) from verbetes right join (select * from (VALUES ('A'), ('B'), ('C'), ('D'), ('E'),('F'),('G'),('H'),('I'),('J'),('K'),('L'),('M'),('N'),('O'),('P'),('Q'),('R'),('S'),('T'),('U'),('V'),('W'),('X'),('Y'),('Z')) as letra (l)) as letras on descricao ilike l || '%' group by l order by l;");
        $verbetes = \App\Verbete::orderBy('descricao')->get();
        \View::share('verbetes', $verbetes);
        \View::share('letras', $letras);
        return $next($request);
    }
}
