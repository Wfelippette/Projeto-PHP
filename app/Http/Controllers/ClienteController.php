<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function criar(Request $request) {
        $cliente = new Cliente;
        $cliente->name = $request->name;
        $cliente->cpf = $request->cpf;
        $cliente->email = $request->email;

        $cliente->save();
        return redirect('/listar_cliente');
    }

    public function formCliente (){

        return view("cadastro_cliente");
        
    }

    public function listar() {
        $clientes = Cliente::all();

        return view("clientes", ["clientes"=>$clientes]);

    }

    public function deletar($id) {
        $cliente = new Cliente;

        $cliente->find($id)->delete();

        return redirect('/listar_cliente');

    }
}

