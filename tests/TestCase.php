<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\TestResponse;
use Illuminate\Support\Facades\DB;
use SjorsO\MocksTime\MocksTime;
use Spatie\Snapshots\MatchesSnapshots;
use Illuminate\Contracts\Console\Kernel;

abstract class TestCase extends BaseTestCase
{
    use MocksTime, MatchesSnapshots;

    protected $testFilePath;

    public function setUp()
    {
        parent::setUp();

        $this->testFilePath = base_path('tests/Files/');

        // $this->setTestNow('2018-05-07 12:00:00');
        
        TestResponse::macro('dump', function () {
            dd($this);
        });
    }

    protected function getSnapshotDirectory(): string
    {
        return $this->getFileSnapshotDirectory();
    }

    protected function getFileSnapshotDirectory(): string
    {
        $subDirectory = property_exists($this, 'snapshotDirectory')
            ? DIRECTORY_SEPARATOR.$this->snapshotDirectory
            : '';

        return $this->testFilesStoragePath.'_snapshots_'.$subDirectory;
    }

    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();
        
        // Sqlite has foreign key constraints disabled by default
        DB::connection()->getSchemaBuilder()->enableForeignKeyConstraints();

        return $app;
    }
}
