<?php

namespace App\Services;

use App\Models\JadwalPelajaran;

class CalendarService
{
    public function generateCalendarData($weekDays)
    {
        $calendarData = [];
        $timeRange = (new TimeService)->generateTimeRange(config('app.calendar.jam_mulai'), config('app.calendar.jam_habis'));
        $lessons   = JadwalPelajaran::with('kelas', 'guru', 'mapel')
            ->get();

        foreach ($timeRange as $time)
        {
            $timeText = $time['start'] . ' - ' . $time['end'];
            $calendarData[$timeText] = [];

            foreach ($weekDays as $index => $day)
            {
                $lesson = $lessons->where('hari', $index)->where('jam_mulai', $time['start'])->first();

                if ($lesson)
                {
                    array_push($calendarData[$timeText], [
                        'class_name'   => $lesson->kelas->nama_kelas,
                        'teacher_name' => $lesson->guru->nama,
                        'mapel'        => $lesson->mapel->nama_mapel,
                        'rowspan'      => $lesson->difference/30 ?? ''
                    ]);
                }
                else if (!$lessons->where('hari', $index)->where('jam_mulai', '<', $time['start'])->where('jam_selesai', '>=', $time['end'])->count())
                {
                    array_push($calendarData[$timeText], 1);
                }
                else
                {
                    array_push($calendarData[$timeText], 0);
                }
            }
        }

        return $calendarData;
    }
}
