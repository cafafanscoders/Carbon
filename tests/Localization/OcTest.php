<?php

/*
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Localization;

class OcTest extends LocalizationTestCase
{
    const LOCALE = 'oc'; // Occitan

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Tomorrow at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Saturday at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Sunday at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Monday at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Tuesday at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Wednesday at 12:00 AM',
        // Carbon::parse('2018-01-05 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-05 00:00:00'))
        'Thursday at 12:00 AM',
        // Carbon::parse('2018-01-06 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-06 00:00:00'))
        'Friday at 12:00 AM',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Tuesday at 12:00 AM',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Wednesday at 12:00 AM',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Thursday at 12:00 AM',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Friday at 12:00 AM',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Saturday at 12:00 AM',
        // Carbon::now()->subDays(2)->calendar()
        'Last Sunday at 8:49 PM',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Yesterday at 10:00 PM',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'Today at 10:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Today at 2:00 AM',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'Tomorrow at 1:00 AM',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Tuesday at 12:00 AM',
        // Carbon::parse('2018-01-08 00:00:00')->subDay()->calendar(Carbon::parse('2018-01-08 00:00:00'))
        'Yesterday at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Yesterday at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Last Tuesday at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Last Monday at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Last Sunday at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Last Saturday at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Last Friday at 12:00 AM',
        // Carbon::parse('2018-01-03 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-03 00:00:00'))
        'Last Thursday at 12:00 AM',
        // Carbon::parse('2018-01-02 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-02 00:00:00'))
        'Last Wednesday at 12:00 AM',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Last Friday at 12:00 AM',
        // Carbon::parse('2018-01-01 00:00:00')->isoFormat('Qo Mo Do Wo wo')
        '1 1 1 1 1',
        // Carbon::parse('2018-01-02 00:00:00')->isoFormat('Do wo')
        '2 1',
        // Carbon::parse('2018-01-03 00:00:00')->isoFormat('Do wo')
        '3 1',
        // Carbon::parse('2018-01-04 00:00:00')->isoFormat('Do wo')
        '4 1',
        // Carbon::parse('2018-01-05 00:00:00')->isoFormat('Do wo')
        '5 1',
        // Carbon::parse('2018-01-06 00:00:00')->isoFormat('Do wo')
        '6 1',
        // Carbon::parse('2018-01-07 00:00:00')->isoFormat('Do wo')
        '7 2',
        // Carbon::parse('2018-01-11 00:00:00')->isoFormat('Do wo')
        '11 2',
        // Carbon::parse('2018-02-09 00:00:00')->isoFormat('DDDo')
        '40',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('DDDo')
        '41',
        // Carbon::parse('2018-04-10 00:00:00')->isoFormat('DDDo')
        '100',
        // Carbon::parse('2018-02-10 00:00:00', 'Europe/Paris')->isoFormat('h:mm a z')
        '12:00 am cet',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 AM, 12:00 am',
        // Carbon::parse('2018-02-10 01:30:00')->isoFormat('h:mm A, h:mm a')
        '1:30 AM, 1:30 am',
        // Carbon::parse('2018-02-10 02:00:00')->isoFormat('h:mm A, h:mm a')
        '2:00 AM, 2:00 am',
        // Carbon::parse('2018-02-10 06:00:00')->isoFormat('h:mm A, h:mm a')
        '6:00 AM, 6:00 am',
        // Carbon::parse('2018-02-10 10:00:00')->isoFormat('h:mm A, h:mm a')
        '10:00 AM, 10:00 am',
        // Carbon::parse('2018-02-10 12:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 PM, 12:00 pm',
        // Carbon::parse('2018-02-10 17:00:00')->isoFormat('h:mm A, h:mm a')
        '5:00 PM, 5:00 pm',
        // Carbon::parse('2018-02-10 21:30:00')->isoFormat('h:mm A, h:mm a')
        '9:30 PM, 9:30 pm',
        // Carbon::parse('2018-02-10 23:00:00')->isoFormat('h:mm A, h:mm a')
        '11:00 PM, 11:00 pm',
        // Carbon::parse('2018-01-01 00:00:00')->ordinal('hour')
        '0',
        // Carbon::now()->subSeconds(1)->diffForHumans()
        'fa 1 segonda',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        'fa 1 segonda',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        'fa 2 segondas',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        'fa 2 segondas',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        'fa 1 minuta',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        'fa 1 minuta',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        'fa 2 minutas',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        'fa 2 minutas',
        // Carbon::now()->subHours(1)->diffForHumans()
        'fa 1 ora',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        'fa 1 ora',
        // Carbon::now()->subHours(2)->diffForHumans()
        'fa 2 oras',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        'fa 2 oras',
        // Carbon::now()->subDays(1)->diffForHumans()
        'fa 1 jorn',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        'fa 1 jorn',
        // Carbon::now()->subDays(2)->diffForHumans()
        'fa 2 jorns',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        'fa 2 jorns',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        'fa 1 setmana',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        'fa 1 setmana',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        'fa 2 setmanas',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        'fa 2 setmanas',
        // Carbon::now()->subMonths(1)->diffForHumans()
        'fa 1 mes',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        'fa 1 mes',
        // Carbon::now()->subMonths(2)->diffForHumans()
        'fa 2 meses',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        'fa 2 meses',
        // Carbon::now()->subYears(1)->diffForHumans()
        'fa 1 an',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        'fa 1 an',
        // Carbon::now()->subYears(2)->diffForHumans()
        'fa 2 ans',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        'fa 2 ans',
        // Carbon::now()->addSecond()->diffForHumans()
        'd\'aquí 1 segonda',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        'd\'aquí 1 segonda',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        '1 segonda aprèp',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        '1 segonda aprèp',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        '1 segonda abans',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        '1 segonda abans',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        '1 segonda',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        '1 segonda',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 segondas',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        '2 segondas',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        'd\'aquí 1 segonda',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        '1 minuta 1 segonda',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        '2 ans 3 meses 1 jorn 1 segonda',
        // Carbon::now()->addYears(3)->diffForHumans(null, null, false, 4)
        'd\'aquí 3 ans',
        // Carbon::now()->subMonths(5)->diffForHumans(null, null, true, 4)
        'fa 5 meses',
        // Carbon::now()->subYears(2)->subMonths(3)->subDay()->subSecond()->diffForHumans(null, null, true, 4)
        'fa 2 ans 3 meses 1 jorn 1 segonda',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        '1 setmana 10 oras',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 setmana 6 jorns',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        '1 setmana 6 jorns',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        '2 setmanas 1 ora',
        // CarbonInterval::days(2)->forHumans()
        '2 jorns',
        // CarbonInterval::create('P1DT3H')->forHumans(true)
        '1 jorn 3 oras',
    ];
}
