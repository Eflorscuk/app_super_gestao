<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, string $metodoAutenticacao, string $perfil): Response
    {
        echo "$metodoAutenticacao - $perfil<br>"; // só para ver chegando; remover depois

        if ($metodoAutenticacao === 'padrao') {
            // aqui verificaria usuário e senha no banco
        }

        if ($perfil === 'visitante') {
            // aqui limitaria o que o visitante pode ver
        }

        if (true) {
            return $next($request);
        }

        return response('Acesso negado! Rota exige autenticação');
    }
}
