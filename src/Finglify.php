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

    /** @var array */
    private $rules = array(
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
        'گ' => 'g',
        'ل' => 'l',
        'م' => 'm',
        'ن' => 'n',
        'و' => 'v',
        'ه' => 'h',
        'ي' => 'y'
    );
}
