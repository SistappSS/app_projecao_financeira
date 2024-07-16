<?php

namespace App\Http\Controllers;

use App\Models\Month;
use App\Models\Transaction;
use Illuminate\Http\Request;

class ProjectionController extends Controller
{
    public function index()
    {
        setlocale(LC_TIME, 'pt_BR.UTF-8'); // Definindo o locale para português do Brasil

        $saldoDiaAtual = 0.00;
        $saldoDiaAnterior = 0.00;
        $balances = [];

        $transactions = Transaction::all();
        $months = Month::orderBy('year')->orderBy('number_month')->orderBy('number_day')->get();

        foreach ($months as $month) {
            // Verificar se há transações para este dia
            $entrada = 0.00;
            $despesa = 0.00;

            foreach ($transactions as $transaction) {
                if ($transaction->day == $month->number_day && $transaction->number_month == $month->number_month && $transaction->year == $month->year) {
                    if ($transaction->type == 'entry') {
                        $entrada += $transaction->value;
                    } elseif ($transaction->type == 'expense') {
                        $despesa += $transaction->value;
                    }
                }
            }

            // Calcular o saldo para o dia atual
            $saldoDiaAtual = $saldoDiaAnterior + $entrada - $despesa;

            // Armazenar o saldo para o dia atual na projeção
            $balances[] = [
                'date' => $month->number_day . ' ' . utf8_encode(strftime('%B', mktime(0, 0, 0, $month->number_month, 10))) . ' ' . $month->year,
                'balance' => $saldoDiaAtual,
                'entrada' => $entrada,
                'despesa' => $despesa,
            ];

            // Atualizar o saldo anterior para o próximo cálculo
            $saldoDiaAnterior = $saldoDiaAtual;
        }

        return view('app.home', compact('balances'));
    }
}
