<?php
/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function Home()
    {
        $array1 = [
                    [1],
                    [3],
                    [6]
                ];
        $array2 = [1,2,6];

        $valor = 1;

        foreach ($array1 as $key => $value) {
            $k = 0;
            $nuns[] = $value[$k];
            ++$k;
        }
        //echo $nuns[1];

        if(in_array($valor, $nuns)){
            echo "Valor encontrado";
        } else {
            echo "Valor não encontrado";
        }

        $num = max($nuns) + 1;
        echo $num;



        return "Teste";
    }

    public function validaQuizEmpresaAdd($empProd, $quizEmpresa)
    {
        
        foreach($quizEmpresa as $key => $quizEmp) {
            if($quizEmp->quiz_questionarios_id == $empProd){
                $validacao = 0;
                break;
            } else {
                $validacao = 1;
            }
        }
        if($validacao != 0){
            $validacao = $quizEmp->quiz_questionarios_id;
        }
        
        return $validacao;
    }

    public function validaQuizEmpresaDel($quizEmpresa, $arrRequest)
    {
        
        $validacao = 1;
        foreach($arrRequest as $key => $empresaProd) {
            //dd($key);
            if($quizEmpresa == $empresaProd[$key]){
                $validacao = 1;
                
            } else {
                $validacao = 0;
            }
            
            
        }
        //dd($arrRequest);
        dd($validacao);
        
        return $validacao;
    }

    public function defineOrdem($id)
    {
        $quizEmpresa = DB::table('Quiz_Empresas_Questionarios')
                                ->where('empresa_id', '=', $id)
                                ->select(['ordem'])
                                ->limit(1)
                                ->orderBy('ordem', 'desc')
                                ->get();
        return ++$quizEmpresa;
    }



    public function update()
    {
        if(empty($request->empresa_produtos))
        {

                //=====================
        //adicionar na quiz para a empresa

            //busca os quiz da empresa
            $quizEmpresa = DB::table('Quiz_Empresas_Questionarios')
                                ->where('empresa_id', '=', $id)
                                ->select(['empresa_id', 'quiz_questionarios_id'])
                                ->get();
            //$quizEmpresa = Quiz_Empresas_Questionarios::findOrFail($id);
            //comparar se a empresa já tem o quiz
            //$possuiQuiz = false;
            
            //===================
            //1. Comparar para deletar
            foreach ($quizEmpresa as $key => $quizEmp)
            {
                //se true ok passar // já possui 
                //se false = deletar 
                $possuiQuiz = true;
                in_array($value, $array)
                //$possuiQuiz = $this->validaQuizEmpresaDel($quizEmp->quiz_questionarios_id, $request->empresa_produtos);
                //$quiz = DB::table('Quiz_Empresas_Questionarios')->find($quizEmp->id);
                if(!$possuiQuiz && ($quiz != ''))
                {
                    $quiz->delete();
                }
                
            } 
            //$quizEmpresa->empresa_id;

            //===================
            //2. comparar para add 
            foreach($request->empresasProd as $key => $empProd){
                //se true ok passar // já possui
                //se false = add
                $possuiQuiz = $this->validaQuizEmpresaAdd($empProd[$key], $quizEmpresa);
                if($possuiQuiz != 0){
                    $quiz_emp = new Quiz_Empresas_Questionarios();
                    $quiz_emp->empresa_id = $id;
                    $quiz_emp->quiz_questionarios_id = $possuiQuiz;
                    $ordem = defineOrdem($id);
                    $quiz_emp->ordem = $ordem;
                    $quiz_emp->save();
                    
                }
                
             }


             //===================
            //3. se tiver respostas associadas à quiz não poderá ser deletada


        }



    }




} */
