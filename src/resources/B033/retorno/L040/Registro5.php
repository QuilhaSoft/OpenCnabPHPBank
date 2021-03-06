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
namespace CnabPHPBank\resources\B033\retorno\L040;

use CnabPHPBank\resources\generico\retorno\L040\Generico5;

class Registro5 extends Generico5
{

    protected $meta = array(
        'codigo_banco' => array(
            'tamanho' => 3,
            'default' => '033',
            'tipo' => 'int',
            'required' => true
		),
        'codigo_lote' => array(
            'tamanho' => 4,
            'default' => 1,
            'tipo' => 'int',
            'required' => true
		),
        'tipo_registro' => array(
            'tamanho' => 1,
            'default' => '5',
            'tipo' => 'int',
            'required' => true
		),
        'filler1' => array(
            'tamanho' => 9,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
		),
        'qtd_registros' => array(
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
		),
        'qtd_titulos_simples' => array(
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
		),
        'vrl_titulos_simples' => array(
            'tamanho' => 15,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => '2',
            'required' => true
		),
        'qtd_titulos_caucionada' => array(
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
		),
        'vlr_titulos_caucionada' => array(
            'tamanho' => 15,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => '2',
            'required' => true
		),
        'qtd_titulos_descontada' => array(
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
		),
        'vlr_titulos_descontada' => array(
            'tamanho' => 15,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => '2',
            'required' => true
		),
        'numero_aviso_lancamento' => array(
            'tamanho' => 8,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
		),
        'filler3' => array(
            'tamanho' => 117,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
		),
    );
}
