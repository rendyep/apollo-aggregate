<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Test extends Command
{
    protected function configure()
    {
        $this->setName('test');

        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        dump('aaa');
        return 0;
    }
}
