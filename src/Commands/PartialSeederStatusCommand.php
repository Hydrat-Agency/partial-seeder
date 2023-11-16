<?php

namespace Hydrat\PartialSeeder\Commands;

use Illuminate\Filesystem\Filesystem;
use Hydrat\PartialSeeder\Concerns\ManagesFiles;
use Hydrat\PartialSeeder\Concerns\ManagesSeedHistory;
use Illuminate\Console\Command;

class PartialSeederStatusCommand extends Command
{
    use ManagesFiles;
    use ManagesSeedHistory;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'partial-seeder:status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show the status of each partial seeder';

    /**
     * The Filesystem facade.
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * The command constructor.
     *
     * @author DevMcC <sinbox.c@gmail.com>
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();

        $this->files = $files;
    }

    /**
     * Execute the console command.
     *
     * @author DevMcC <sinbox.c@gmail.com>
     *
     * @return void
     */
    public function handle()
    {
        $files = $this->getPartialSeedsFiles();

        if (empty($files)) {
            $this->output->writeln('<info>No partial seeders found.</info>');

            return;
        }

        $files = array_map(function ($file) {
            return [
                $this->getSeederStatus($file['filename']),
                $file['filename'],
            ];
        }, $files);

        $this->table(['Ran?', 'Partial Seeder'], $files);
    }

    /**
     * @author DevMcC <sinbox.c@gmail.com>
     *
     * @param  string $fileName
     *
     * @return string
     */
    protected function getSeederStatus(string $fileName)
    {
        return $this->checkSeederFromHistory($fileName) ? '<info>Y</info>' : '<fg=red>N</fg=red>';
    }
}
