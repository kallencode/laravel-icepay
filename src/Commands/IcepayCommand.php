<?php

namespace Kallencode\Icepay\Commands;

use Illuminate\Console\Command;

class IcepayCommand extends Command
{
    public $signature = 'icepay';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
