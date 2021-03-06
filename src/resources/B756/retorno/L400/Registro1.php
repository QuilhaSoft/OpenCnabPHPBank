<?php
/*
* CnabPHPBank - Geração de arquivos de remessa e retorno em PHP
*
* LICENSE: The MIT License (MIT)
*
* Copyright (C) 2013 Ciatec.net
*
* Permission is hereby granted, free of charge, to any person obtaining a copy of this
* software and associated documentation files (the "Software"), to deal in the Software
* without restriction, including without limitation the rights to use, copy, modify,
* merge, publish, distribute, sublicense, and/or sell copies of the Software, and to
* permit persons to whom the Software is furnished to do so, subject to the following
* conditions:
*
* The above copyright notice and this permission notice shall be included in all copies
* or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
* INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
* PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
* HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
* OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
* SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/
namespace CnabPHPBank\resources\B756\retorno\L400;
use CnabPHPBank\resources\generico\retorno\L400\Generico1;
use CnabPHPBank\RetornoAbstract;

class Registro1 extends Generico1
{
    public $trailler;
    protected $meta = array(
        'tipo_registro'=>array(
            'tamanho'=>1,
            'default'=>'1',
            'tipo'=>'int',
            'required'=>true),  
        'tipo_inscricao_empresa'=>array(
            'tamanho'=>2,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'numero_inscricao_empresa'=>array(
            'tamanho'=>14,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'agencia'=>array(
            'tamanho'=>4,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'agencia_dv'=>array(
            'tamanho'=>1,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'conta'=>array(
            'tamanho'=>8,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'conta_dv'=>array(
            'tamanho'=>1,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'numero_convenio'=>array(
            'tamanho'=>6,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'seu_numero'=>array(
            'tamanho'=>25,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'nosso_numero'=>array(
            'tamanho'=>11,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'nosso_numero_dv'=>array(
            'tamanho'=>1,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'numero_parcela'=>array(
            'tamanho'=>2,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'grupo_valor'=>array(
            'tamanho'=>4,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'codigo_baixa'=>array(
            'tamanho'=>2,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'especie_titulo_lit'=>array(      //13.3P
            'tamanho'=>3,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'carteira'=>array(
            'tamanho'=>3,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'conta_caucao'=>array(
            'tamanho'=>1,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'cod_responsabilidade'=>array(      //13.3P
            'tamanho'=>5,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'cod_responsabilidade_dv'=>array(      //13.3P
            'tamanho'=>1,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'taxa_desconto'=>array(            // 9.3Q
            'tamanho'=>3,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'taxa_IOF'=>array(            // 9.3Q
            'tamanho'=>3,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'filler41'=>array(            //20.3
            'tamanho'=>1,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'cod_carteira'=>array(            //20.3
            'tamanho'=>2,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'codigo_movimento'=>array(      // codigo da ocorrencia no manual itau
            'tamanho'=>2,
            'default'=>'', // entrada de titulo
            'tipo'=>'int',
            'required'=>true),
        'data_ocorrencia'=>array(      // codigo da ocorrencia no manual itau
            'tamanho'=>6,
            'default'=>'', // entrada de titulo
            'tipo'=>'date',
            'required'=>true),
        'seu_numero2'=>array(            //20.3
            'tamanho'=>10,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'filler42'=>array(            //20.3
            'tamanho'=>20,
            'default'=>'',
            'tipo'=>'alfa',
            'required'=>true),
        'data_vencimento'=>array(            //26.3P
            'tamanho'=>6,
            'default'=>'',
            'tipo'=>'date',
            'required'=>true),
        'valor'=>array(                 //21.3P
            'tamanho'=>11,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'codigo_banco'=>array(
            'tamanho'=>3,
            'default'=>'341',
            'tipo'=>'int',
            'required'=>true),
        'agencia_cobradora'=>array(    //22.3P
            'tamanho'=>4,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'agencia_cobradora_dv'=>array(    //22.3P
            'tamanho'=>1,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
        'especie_titulo'=>array(    //24.3P
            'tamanho'=>2,
            'default'=>'2',
            'tipo'=>'int',
            'required'=>true),
        'data_credito'=>array(            //26.3P
            'tamanho'=>6,
            'default'=>'',
            'tipo'=>'date',
            'required'=>true),
        'vlr_tarifas'=>array(            //25.3P
            'tamanho'=>5,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'vlr_outras_despesas'=>array(               // 8.3Q
            'tamanho'=>11,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'vlr_juros_desconto'=>array(               // 8.3Q
            'tamanho'=>11,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'vlr_iof'=>array(               // 11.3Q
            'tamanho'=>11,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'vlr_abatimento'=>array(       //10.3Q
            'tamanho'=>11,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'vlr_desconto'=>array(            // 9.3Q
            'tamanho'=>11,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'vlr_pago'=>array(               //12.3Q
            'tamanho'=>11,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'vlr_juros_multa'=>array(               // 8.3Q
            'tamanho'=>11,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'vlr_outros'=>array(               // 8.3Q
            'tamanho'=>11,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'vlr_abatimento_na'=>array(               // 8.3Q
            'tamanho'=>11,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'vlr_lancamento'=>array(               // 8.3Q
            'tamanho'=>11,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'indicativo_debito_credito'=>array(    //24.3P
            'tamanho'=>1,
            'default'=>' ',
            'tipo'=>'int',
            'required'=>true),
        'indicativo_valor'=>array(    //24.3P
            'tamanho'=>1,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'vlr_ajuste'=>array(               // 8.3Q
            'tamanho'=>11,
            'default'=>'',
            'tipo'=>'decimal',
            'precision'=>2,
            'required'=>true),
        'filler45'=>array(    //24.3P
            'tamanho'=>10,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
        'numero_inscricao_pagador'=>array(            //29.3P
            'tamanho'=>14,
            'default'=>'',
            'tipo'=>'int',
            'required'=>true),
        'filler47'=>array(
            'tamanho'=>38,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true),
       'numero_registro'=>array(       // 4.3R
            'tamanho'=>6,
            'default'=>'0',
            'tipo'=>'int',
            'required'=>true),
    );
    public function __construct($linhaTxt)
    {
        parent::__construct($linhaTxt);

        RetornoAbstract::$linesCounter++;
        //$this->inserirDetalhe();
    }
    /*
    metodo get_R3U
    metodo que espõe esse registro como se fosse o R3U da caixa
    */
    public function get_R3U()
    {
        return $this;
    }
    /*
    metodo get_vlr_liquido
    metodo que espõe esse vlr_liquido como se fosse o da caixa
    */
    public function get_vlr_liquido()
    {
        return $this->vlr_lancamento;
    }
     
}

?>
