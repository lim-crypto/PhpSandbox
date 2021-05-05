<?php                                   

//echo date('d');  //day                  j       S  Sj        N        Z  t
//echo date('m');  //month       F        n      
//echo date('Y');  //year     y            
//echo date('l');  //day of the week      D                    

//not correct time
       echo date('m/d/Y-l h:i:sa');

//echo date ('h'); //hour
//echo date ('i'); // min
//echo date ('s'); //sec
//echo date ('a'); // am or pm

// set time zone 

//this is correct time
    date_default_timezone_set('Asia/Taipei');
  echo   date('m/d/Y-l h:i:sa');


echo '<br><br>';

//                  h    i   s  m   d    y
$timestamp = mktime(10, 14, 54, 9, 10, 1981);
//echo $timestamp;
echo date ('m/d/y h:i:sa', $timestamp);
$timestamp2 = strtotime('7:00pm March 22 2016');
$timestamp3 = strtotime('tomorrow');
$timestamp4 = strtotime('next Sunday');
$timestamp5 = strtotime('+2 Days');
echo '<br><br>';

echo date ( 'm/d/Y h:i:sa', $timestamp2)



 /*
format character      description                                       example returned values
DAY
    d               day of the month, 2 digits with leading zeros               01 to 31
    D               a textual representation of a day, three letters            Mon through Sun
    j               day of the month without leading zeros                      1 to 31
    l (lowercase L) a full textual representation of the day of the week        Sunday through Saturday
    N               ISO-8601 numeric representation of the day of the week      1(for monday) through 7 (Sunday)
    S               english ordinal suffix for the day of the month, 
                    2 characters                                                st, nd, rd, or th. works well with j
    w               numeric representation of the day of the week               0(for sunday) through 6(saturday)
    Z               the day of the year(starting from 0)                        0through 365
WEEK
    W               ISO-8601 week number of year, week starting on monday       42(the 42nd week in the year)    
MONTH
    F               A full textual representation of a month, such as 
                    January or March                                            January through December
    m               numeric representation of a month, with leading zeros       01 through 12
    M               A short textual representation of a month, three letters    Jan through Dec
    n               numeric representation of a month, without leading zeros    1 through 12
    t               number of days in the given month                           28 through 31
YEAR
    L               whether its a leap year                                     1 if it is a leap year, 0 otherwise
    o               ISO-8601 week-numbering year. this has same value as Y,
                    except that if the ISO week number(W) belongs to previous 
                    or next year, that year is used instead.                    1999 or 2003
    Y               a full numeric representaion of a year, 4 digits            1999 or 2003
    y               A two digits representation of a year                          99 or 03
TIME
    a               Lowercase ante meridiem and post meridiem                   am or pm
    A               uppercase ante meridiem and post meridiem                   AM or PM
    B               Swatch internet time                                        000 through 999
    g               12-hour format of an hour without leading zeros             1-12
    G               24-hours format of an hour without leading zeros            0-23
    h               12-hour format of an hour with leading zeros                01-12
    H               24-hours format of an hour wit  leading zeros               00-23
    i               minuteswith leading zeros                                   00-59
    s               Seconds, with leading zeros                                 00-59
    u               microseconds.    date() X  DateTime::format() /             654321
    v               millisecinds                                                654
TIMEZONE





*/
?>

