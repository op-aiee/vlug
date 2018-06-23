<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\TestResponse;
use Illuminate\Support\Carbon;
use Spatie\Snapshots\MatchesSnapshots;
use Illuminate\Contracts\Console\Kernel;

abstract class TestCase extends BaseTestCase
{
    use MatchesSnapshots;

    protected $testFilePath;

    public function setUp()
    {
        parent::setUp();

        $this->testFilePath = base_path('tests/Storage/');

        // Carbon::setTestNow('2018-05-07 12:00:00');
        
        TestResponse::macro('dump', function () {
            dd($this);
        });
    }

    protected function getSnapshotDirectory(): string
    {
        $subdirectory = property_exists($this, 'snapshotSubdirectory')
            ? DIRECTORY_SEPARATOR.ltrim($this->snapshotSubdirectory, DIRECTORY_SEPARATOR)
            : '';

        return $this->testFilePath.'_snapshots_'.$subdirectory;
    }

    protected function getFileSnapshotDirectory(): string
    {
        $subdirectory = property_exists($this, 'fileSnapshotSubdirectory')
            ? DIRECTORY_SEPARATOR.ltrim($this->fileSnapshotSubdirectory, DIRECTORY_SEPARATOR)
            : '';

        return $this->testFilePath.'_file-snapshots_'.$subdirectory;
    }

    protected function progressTimeInMinutes($minutes = 1)
    {
        Carbon::setTestNow(
            now()->addMinutes($minutes)
        );

        return $this;
    }

    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
