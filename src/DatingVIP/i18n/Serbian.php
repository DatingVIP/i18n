<?php
/**
 * Simple helper for Serbian language
 *  - offers transliteration Serbian cyrillic to latin script and vice versa
 *
 * @package		DatingVIP
 * @subpackage	i18n
 * @author		Boris Momcilovic <boris@firstbeatmedia.com>
 * @copyright	&copy; 2014 firstbeatmedia.com
 * @version		1.0
 */

namespace DatingVIP\i18n;

class Serbian
{
/**
 * Map of cyrillic to latin chars (in Serbian)
 *
 * @var		array
 * @access	private
 * @static
 */
    private static $cyr2lat =
    [
        "А" => "A", "Б" => "B", "В" => "V", "Г" => "G", "Д" => "D", "Ђ" => "Đ",
        "Е" => "E", "Ж" => "Ž", "З" => "Z", "И" => "I", "Ј" => "J", "К" => "K",
        "Л" => "L", "Љ" => "LJ", "М" => "M", "Н" => "N", "Њ" => "NJ", "О" => "O",
        "П" => "P", "Р" => "R", "С" => "S", "Ш" => "Š", "Т" => "T", "Ћ" => "Ć",
        "У" => "U", "Ф" => "F", "Х" => "H", "Ц" => "C", "Ч" => "Č", "Џ" => "DŽ",
        "Ш" => "Š", "а" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d",
        "ђ" => "đ", "е" => "e", "ж" => "ž", "з" => "z", "и" => "i", "ј" => "j",
        "к" => "k", "л" => "l", "љ" => "lj", "м" => "m", "н" => "n", "њ" => "nj",
        "о" => "o", "п" => "p", "р" => "r", "с" => "s", "ш" => "š", "т" => "t",
        "ћ" => "ć", "у" => "u", "ф" => "f", "х" => "h", "ц" => "c", "ч" => "č",
        "џ" => "dž", "ш" => "š", "Ња" => "Nja", "Ње" => "Nje", "Њи" => "Nji",
        "Њо" => "Njo", "Њу" => "Nju", "Ља" => "Lja", "Ље" => "Lje", "Љи" => "Lji",
        "Љо" => "Ljo", "Љу" => "Lju", "Џа" => "Dža", "Џе" => "Dže", "Џи" => "Dži",
        "Џо" => "Džo", "Џу" => "Džu"
    ];

/**
 * Transliterate text from cyrillic to latin (Serbian)
 *
 * @param	string	$text
 * @access	public
 * @return	mixed
 * @static
 */
    public static function cyr2lat($text)
    {
        return is_scalar ($text) ? strtr ($text, self::$cyr2lat) : $text;
    }

/**
 * Transliterate text from latin to cyrillic (Serbian)
 *
 * @param	string	$text
 * @access	public
 * @return	mixed
 * @static
 */
    public static function lat2cyr($text)
    {
        return is_scalar ($text) ? strtr ($text, array_flip (self::$cyr2lat)) : $text;
    }

}
