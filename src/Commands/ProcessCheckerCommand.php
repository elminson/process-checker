<?php

namespace Elminson\ProcessChecker\Commands;

use Illuminate\Console\Command;

class ProcessCheckerCommand extends Command
{
    public $signature = 'process-checker';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
