<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Cliente;
 
class ClienteController extends Controller
{
    public function search(Request $request)
    {
        $cpf = $request->input('cpf');
        $query = Cliente::query();
    
        if (!empty($cpf)) {
            $query->where('cpf', $cpf);
        }
    
        $cliente = $query->orderBy('created_at', 'DESC')->get();
    
        return view('cliente.index', compact('cliente'));
    }
   
    public function index()
    {
        $clientes = Cliente::orderBy('created_at', 'DESC')->paginate(10);
    
        return view('cliente.index', compact('clientes'));
    }
    
 
   
    public function create()
    {
        return view('cliente.create');
    }
 
   
    public function store(Request $request)
    {
        Cliente::create($request->all());
 
        return redirect()->route('cliente.index')->with('success', 'Cliente criado com sucesso');
    }
 
   
    public function show(string $id)
    {
        $cliente = Cliente::findOrFail($id);
 
        return view('cliente.show', compact('cliente'));
    }
 
 
    public function edit(string $id)
    {
        $cliente = Cliente::findOrFail($id);
 
        return view('cliente.edit', compact('cliente'));
    }
 
    
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::findOrFail($id);
 
        $cliente->update($request->all());
 
        return redirect()->route('cliente.index')->with('success', 'cliente atualizado com sucesso');
    }
 
    
    public function destroy(string $id)
    {
        $cliente = Cliente::findOrFail($id);
 
        $cliente->delete();
 
        return redirect()->route('cliente.index')->with('success', 'cliente deletado com sucesso');
    }

}