<?php defined('SYSPATH') or die('No direct script access.');
 
class Date extends Kohana_Date
    {
    public static function fuzzy_span($timestamp, $local_timestamp = NULL)
    {
        $local_timestamp = ($local_timestamp === NULL) ? time() : (int) $local_timestamp;
 
        // Determine the difference in seconds
        $offset = abs($local_timestamp - $timestamp);
 
        if ($offset <= Date::MINUTE)
        {
            $span = 'меньше минуты';
        }
        elseif ($offset < (Date::MINUTE * 20))
        {
            $span = 'несколько минут';
        }
        elseif ($offset < Date::HOUR)
        {
            $span = 'меньше часа';
        }
        elseif ($offset < (Date::HOUR * 4))
        {
            $span = 'пару часов';
        }
        elseif ($offset < Date::DAY)
        {
            $span = 'меньше суток';
        }
        elseif ($offset < (Date::DAY * 2))
        {
            $span = 'около суток';
        }
        elseif ($offset < (Date::DAY * 4))
        {
            $span = 'пару дней';
        }
        elseif ($offset < Date::WEEK)
        {
            $span = 'меньше недели';
        }
        elseif ($offset < (Date::WEEK * 2))
        {
            $span = 'около недели';
        }
        elseif ($offset < Date::MONTH)
        {
            $span = 'менее месяца';
        }
        elseif ($offset < (Date::MONTH * 2))
        {
            $span = 'около месяца';
        }
        elseif ($offset < (Date::MONTH * 4))
        {
            $span = 'пару месяцев';
        }
        elseif ($offset < Date::YEAR)
        {
            $span = 'менее года';
        }
        elseif ($offset < (Date::YEAR * 2))
        {
            $span = 'около года';
        }
        elseif ($offset < (Date::YEAR * 4))
        {
            $span = 'пару лет';
        }
        elseif ($offset < (Date::YEAR * 8))
        {
            $span = 'несколько лет';
        }
        elseif ($offset < (Date::YEAR * 12))
        {
            $span = 'около столения';
        }
        elseif ($offset < (Date::YEAR * 24))
        {
            $span = 'пару столетий';
        }
        elseif ($offset < (Date::YEAR * 64))
        {
            $span = 'несколько столетий';
        }
        else
        {
            $span = 'много времени';
        }
 
        if ($timestamp <= $local_timestamp)
        {
            // This is in the past
            return $span.' назад';
        }
        else
        {
            // This in the future
            return 'через '.$span;
        }
    }
}