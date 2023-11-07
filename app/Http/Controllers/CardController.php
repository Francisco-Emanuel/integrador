<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CardController extends Controller
{
    // CARDS
    public function showCards() {
        $cards = Card::all();
        return view('home', ['cards' => $cards]);
    }
    public function createCards(Request $request) {
        $resultados = $request->validate([
            'title' => 'required',
            'description'=> 'required',
            'dados_imagem'=> 'required'
            
        ]);

        if ($request->hasFile('dados_imagem')) {
            $imagePath = $request->file('dados_imagem')->store('public/image');
            $resultados['dados_imagem'] = $imagePath;
        }
        
        $resultados['title'] = strip_tags($resultados['title']);
        $resultados['description'] = strip_tags($resultados['description']);
        Card::create($resultados);
        return redirect('/create');
    }
    public function deleteCards(Request $request) {
        $resultados = $request->validate([
            'dTitle'=> 'required',
        ]);

        $title = $request->input('title');
        $card = Card::where('title', $resultados['dTitle'])->first();

        if ($card) {
            Storage::delete($card->dados_imagem);

            $card->delete();
            return redirect('/create')->with('success', 'Cartão excluído com sucesso.');
        } else {
            return redirect('/create')->with('error', 'Cartão não encontrado.');
        }
    }
    public function deleteCard(Request $request) {
        $resultados = $request->validate([
            'title'=> 'required',
        ]);

        $title = $request->input('title');
        $card = Card::where('title', $title)->first();

        if ($card) {
        
            $card->delete();
            return redirect('/create')->with('success', 'Cartão excluído com sucesso.');
        } else {
            return redirect('/create')->with('error', 'Cartão não encontrado.');
        }
    }
}
