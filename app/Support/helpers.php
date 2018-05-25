<?php

/**
 * @param $path
 * @param null|string $disk
 *
 * @return string Absolute path to a file from the storage facade
 */
function storage_disk_file_path($path, $disk = null)
{
    $disk = $disk ?: env('FILESYSTEM_DRIVER');

    $storagePath = \Storage::disk($disk)->getDriver()->getAdapter()->getPathPrefix();

    return str_finish($storagePath, '/').ltrim($path, '/');
}

/**
 * Trigger a "dd()" after it has been called "timesCalled" times.
 *
 * @param $var
 *
 * @param int $timesCalled
 */
function dd_delay($var, int $timesCalled = 2)
{
    static $calls = [];

    $caller = sha1(debug_backtrace()[0]['file'].'|'.debug_backtrace()[0]['line']);

    $callCount = $calls[$caller] ?? 1;

    if ($callCount === $timesCalled) {
        dd($var);
    }

    $calls[$caller] = $callCount + 1;
}
