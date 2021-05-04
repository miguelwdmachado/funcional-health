<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContaUsers;
use App\Models\Conta;
use App\Models\Agencia;
use App\Models\Movimentacao;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function saldo(Request $request)
    {
      $conta = $request->conta;
      if ($conta == null) {
        return responder()->error(null,'A conta deve ser informada.')->respond();
      } else {
      $conta_ativa = Conta::where('numero', $conta)->first();
      if ($conta_ativa) {
        return responder()->success(['saldo' => $conta_ativa['saldo']])->respond();
        } else {
          return responder()->error(null,'Conta não localizada.')->respond();
        }
      }
    }

    public function depositar(Request $request)
    {
      $valor = $request->valor;
      $conta = $request->conta;
      if ($valor == null or $conta == null) {
        return responder()->error(null,'A conta e o valor devem ser informados.')->respond();
      } else {
        $conta_ativa = Conta::where('numero', $conta)->first();
        if ($conta_ativa) {
          $saldo_antigo = $conta_ativa['saldo'];
          Movimentacao::create([
            'numero' => $conta,
            'tipo' => 'c',
            'valor' => $valor,
          ]);
          $saldo = $saldo_antigo + $valor;
          $conta_ativa['saldo'] = $saldo;
          $conta_ativa->save();
          return responder()->success(['depositar' => array('conta' => $conta, 'saldo' => $conta_ativa['saldo'])])->respond();
        } else {
          return responder()->error(null,'Conta não localizada.')->respond();
        }
      }
    }

    public function sacar(Request $request)
    {
      $valor = $request->valor;
      $conta = $request->conta;
      if ($valor == null or $conta == null) {
        return responder()->error(null,'A conta e o valor devem ser informados.')->respond();
      } else {
        $conta_ativa = Conta::where('numero', $conta)->first();
        if ($conta_ativa) {
          $saldo_antigo = $conta_ativa['saldo'];
          if ($saldo_antigo < $valor) {
            return responder()->error(null,'Saldo insuficiente.')->respond();
          } else {
            Movimentacao::create([
              'numero' => $conta,
              'tipo' => 'd',
              'valor' => $valor,
            ]);
            $saldo = $saldo_antigo - $valor;
            $conta_ativa['saldo'] = $saldo;
            $conta_ativa->save();
            return responder()->success(['sacar' => array('conta' => $conta, 'saldo' => $conta_ativa['saldo'])])->respond();
          }
        } else {
            return responder()->error(null,'Conta não localizada.')->respond();
        }
      }
    }

}
