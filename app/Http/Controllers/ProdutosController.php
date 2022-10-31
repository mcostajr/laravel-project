<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function index() {
        $produtos = Produto::getNewProducts();
        $produtosUsados = Produto::getUsedProducts();
        return view('produtos', ['produtos' => $produtos, 'produtosUsados' => $produtosUsados]);
    }
    public function newProduct() {
        $produtos = Produto::getNewProducts();
        return view('novo', ['produtos' => $produtos]);
    }
    public function usedProduct() {
        $produtos = Produto::getUsedProducts();
        return view('usados', ['produtos' => $produtos]);
    }
}
