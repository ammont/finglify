<?php

/**
 * This file is part of ammont/finglify.
 *
 * (c) Amir Montazer <ammontazer@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ammont\Finglify;

/**
 * Finglify
 *
 * @author    Amir Montazer <ammontazer@gmail.com>
 * @copyright 2012-2014 Amir Montazer
 * @license   http://www.opensource.org/licenses/MIT The MIT License
 */
class Finglify {

    private static $instance;

    private $words_file_path;
    
    private $words;

    /** @var array */
    private $rules;

    public function __construct()
    {
        if(self::$instance) {
            return self::$instance;
        }
        
        $this->words_file_path = __DIR__ . '/../resources/words.json';
        $this->words = $this->parseWordsFromFile();

        $this->rules[0] = array(
                'ای' => 'i',
                'او' => 'oo',
            );

        $this->rules[1] = array(
                // Numeric characters
                '۱' => 1,
                '۲' => 2,
                '۳' => 3,
                '۴' => 4,
                '۵' => 5,
                '۶' => 6,
                '۷' => 7,
                '۸' => 8,
                '۹' => 9,
                '۰' => 0,

                /* Persian */
                'آ' => 'aa',
                'ا' => 'a',
                'ب' => 'b',
                'پ' => 'p',
                'ت' => 't',
                'ث' => 's',
                'ج' => 'j',
                'چ' => 'ch',
                'ح' => 'h',
                'خ' => 'kh',
                'د' => 'd',
                'ذ' => 'z',
                'ر' => 'r',
                'ز' => 'z',
                'س' => 's',
                'ش' => 'sh',
                'ص' => 's',
                'ض' => 'z',
                'ط' => 't',
                'ظ' => 'z',
                'ع' => 'aa',
                'غ' => 'gh',
                'ف' => 'f',
                'ق' => 'gh',
                'ك' => 'k',
                'ک' => 'k',
                'گ' => 'g',
                'ل' => 'l',
                'م' => 'm',
                'ن' => 'n',
                'و' => 'v',
                'ه' => 'h',
                'ي' => 'y',
                'ی' => 'y',
            );
    }

    public function translate($string)
    {
        $translate = strtr($string, $this->words);

        if($translate == "") {
            $translate = $string;
        }

        foreach ($this->rules as $rule)
        {
            $string = strtr($string, $rule);
        }

        return $string;
    }

    public function parseWordsFromFile()
    {
        $words = file_get_contents($this->words_file_path);

        return json_decode($words, true);
    }

    public static function create()
    {
        if(!self::$instance) {
            self::$instance = new static;
        }
        return self::$instance;
    }

    public static function trans($string)
    {
        return static::create()->translate($string);
    }

    public static function sentence($sentence_string)
    {
        $words = preg_split("/[\s,\.]+/", $sentence_string);
        $translate = "";
        foreach($words as $word) {
            $translate .= static::trans($word);
            $translate .= " ";
        }

        return trim($translate);
    }
}
