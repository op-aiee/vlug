<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Spatie\Snapshots\MatchesSnapshots;
use Illuminate\Contracts\Console\Kernel;

abstract class TestCase extends BaseTestCase
{
    use MatchesSnapshots;

    protected $testFilePath;

    protected $tempFilePath;

    public function setUp()
    {
        parent::setUp();

        $this->testFilePath = base_path('tests/Files/');

        $this->tempFilePath = $this->testFilePath.'Temp/';
    }

    public function tearDown()
    {
        $this->emptyTempFilesDirectory();

        parent::tearDown();
    }

    protected function emptyTempFilesDirectory()
    {
        $fileNames = scandir($this->tempFilePath);

        $fileNames = array_filter($fileNames, function ($name) {
            return substr($name, 0, 1) !== '.';
        });

        foreach ($fileNames as $name) {
            unlink($this->tempFilePath.$name);
        }
    }

    protected function getSnapshotDirectory(): string
    {
        return $this->testFilePath.'_snapshots_';
    }

    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
