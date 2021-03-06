<?php
/*
* CnabPHPBank - Geração de arquivos de remessa e retorno em PHP
*
* LICENSE: The MIT License (MIT)
*
* Copyright (C) 2018 NextStep <http://github.com/nxstep-si>
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
namespace CnabPHPBank\resources\B756\remessa\cnab240;
use CnabPHPBank\resources\generico\remessa\cnab240\Generico3;
use CnabPHPBank\Exception;

class Registro3R extends Generico3
{
	protected $meta = array(
		'codigo_banco'=>array(          // 1.3R -- 1-3
			'tamanho'=>3,
			'default'=>'756',
			'tipo'=>'int',
			'required'=>true),
		'codigo_lote'=>array(           // 2.3R -- 4-7
			'tamanho'=>4,
			'default'=>1,
			'tipo'=>'int',
			'required'=>true),
		'tipo_registro'=>array(         // 3.3R -- 8
			'tamanho'=>1,
			'default'=>'3',
			'tipo'=>'int',
			'required'=>true),
		'numero_registro'=>array(       // 4.3R -- 9-13
			'tamanho'=>5,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'seguimento'=>array(            // 5.3R -- 14
			'tamanho'=>1,
			'default'=>'R',
			'tipo'=>'alfa',
			'required'=>true),
		'filler1'=>array(               // 6.3R -- 15
			'tamanho'=>1,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'codigo_movimento'=>array(      // 7.3R -- 16-17
			'tamanho'=>2,
			'default'=>'01', // entrada de titulo
			'tipo'=>'int',
			'required'=>true),

			// - ------------------ até aqui é igual para todo registro tipo 3

		'filler2'=>array(               // 8.3R -- 18
			'tamanho'=>1,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'data_desconto2'=>array(        // 9.3R -- 19-26
			'tamanho'=>8,
			'default'=>'0',
			'tipo'=>'date',
			'required'=>true),
		'vlr_desconto2'=>array(       	//10.3R -- 27-41
			'tamanho'=>13,
			'default'=>'0',
			'tipo'=>'decimal',
			'precision'=>2,
			'required'=>true),
	    'filler3'=>array(               //11.3R -- 42
	        'tamanho'=>1,
	        'default'=>'0',
	        'tipo'=>'int',
	        'required'=>true),
		'data_desconto3'=>array(        //12.3R -- 43-50
			'tamanho'=>8,
			'default'=>'0',
			'tipo'=>'date',
			'required'=>true),
		'vlr_desconto3'=>array(      	//13.3R -- 51-65
			'tamanho'=>13,
			'default'=>'0',
			'tipo'=>'decimal',
			'precision'=>2,
			'required'=>true),
		'codigo_multa'=>array(  		//14.3R -- 66
			'tamanho'=>1,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
		'data_multa'=>array(   			//15.3R -- 67-74
			'tamanho'=>8,
			'default'=>'0',
			'tipo'=>'date',
			'required'=>true),
		'vlr_multa'=>array(      		//16.3R -- 75-89
			'tamanho'=>13,
			'default'=>'0',
			'tipo'=>'decimal',
			'precision'=>2,
			'required'=>true),
		'filler5'=>array(        		//17.3R -- 90-99
			'tamanho'=>10,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'mensagem_3'=>array(          	//18.3R -- 100-139
			'tamanho'=>40,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'mensagem_4'=>array(          	//19.3R -- 140-179
			'tamanho'=>40,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'filler6'=>array(        		//20.3R -- 180-199
			'tamanho'=>20,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
		'cod_ocor_pagador'=>array(    	//21.3R -- 200-207
			'tamanho'=>8,
			'default'=>'0',
			'tipo'=>'int',
			'required'=>true),
	    'filler7'=>array(         		//22.3R+23.3R -- 208-215
	        'tamanho'=>8,
	        'default'=>'0',
	        'tipo'=>'int',
	        'required'=>true),
	    'filler8'=>array(         		//24.3R -- 216
	        'tamanho'=>1,
	        'default'=>' ',
	        'tipo'=>'alfa',
	        'required'=>true),
	    'filler9'=>array(         		//25.3R -- 217-228
	        'tamanho'=>12,
	        'default'=>'0',
	        'tipo'=>'int',
	        'required'=>true),
	    'filler10'=>array(         		//26.3R+27.3R -- 229-230
	        'tamanho'=>2,
	        'default'=>' ',
	        'tipo'=>'alfa',
	        'required'=>true),
	    'filler11'=>array(         		//28.3R -- 231
	        'tamanho'=>1,
	        'default'=>'0',
	        'tipo'=>'int',
	        'required'=>true),
		'filler12'=>array(         		//29.3R -- 232-240
			'tamanho'=>9,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true),
	);
}

?>
