<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PacienteController extends Controller
{
    public function calcularIMC($nome, $peso, $altura, $genero) {
        $genero = strtolower($genero);

        function validationGenero($tip) {
            $tips = ['masculino','feminino'];

            return in_array($tip, $tips);
        }

        $r = [
            'nome' => $nome,
            'peso' => $peso,
            'altura' => $altura,
            'genero' => validationGenero($genero),
        ];

        $validator = Validator::make($r, [
            'nome' => 'required',
            'peso' => 'required|numeric',
            'altura' => 'required|numeric',
            'genero' => 'required|bool|accepted',
        ]);

        if ($validator->fails()) {
            return "Informe apenas valores válidos";
        } else {
            $imc = $peso / pow($altura,2);

            if($genero == "masculino") {
            $genero = "Sr.";
            } else if($genero == "feminino"){
            $genero = "Sra.";
            }

            if($imc < 18.5) {
            $imcText = "abaixo do peso";     
            } else if($imc >18.5 && $imc < 25) {
            $imcText = "Peso ideal(parabéns)";
            } else if($imc >= 25 && $imc < 30) {
            $imcText = "Levemente acima do peso";
            } else if($imc >=30 && $imc < 35) {
            $imcText = "Levemente acima do peso";
            } else if($imc >= 35 && $imc < 40) {
            $imcText = "Obesidade grau ll (severa)";
            } else {
            $imcText = "Obesidade lll (mórbida)";
            }
        }

        return view('home', [
            'genero' => $genero,
            'nome' => $nome,
            'imc' => $imc,
            'imcText' => $imcText,
            'imcIsGood' => $imc > 18.5 && $imc < 25,
        ]);
    }
}
