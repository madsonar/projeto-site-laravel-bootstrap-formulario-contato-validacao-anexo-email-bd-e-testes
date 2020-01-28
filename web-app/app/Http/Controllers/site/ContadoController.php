<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\models\site\Contatos;

class ContadoController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.contato.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {

            //dd($request->all());
            
            $validator = Validator::make($request->all(), [
                'nome' => ['required', 'string', 'min:4', 'max:255'],
                'email' => ['required', 'string', 'email', 'min:7', 'max:255'],
                'telefone' => ['required', 'string','min:13', 'max:14'],
                'mensagem' => ['required', 'string','min:20', 'max:1000'],
                'arquivo' => 'required|file|mimes:pdf,doc,docx,odt,txt|max:500'
            ]);
    
            if ($validator->fails()) {
                return redirect('contato')
                            ->withErrors($validator)
                            ->withInput();
            }else{

                $arquivo =  uniqid(date('Ymd').time()).'.'.$request->arquivo->extension();   
                $request->arquivo->move(public_path('arquivos'), $arquivo);
                
                $arquivo = "/arquivos/".$arquivo;

                $dados = $request->all();

                $dados['arquivo'] = $arquivo;

                //dd($dados);

                Contatos::create( $dados);

                \Mail::to($request->email)
                ->send(new \App\Mail\ContatoMail($dados));
            
                return back()
                ->with('success','Mensagem enviada com sucesso.');            
            }

        } catch (\Throwable $th) {
            dd($th);
            //return redirect('contato');
            return back()
                ->with('error','Não possível enviar a mensagem.');            
        }
    }

}
