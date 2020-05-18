<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RepeatPhrase extends Command
{
    protected function configure()
    {
        $this
            ->setName('print_string')
            ->setDescription('Print some string N time')
            ->addArgument('str', InputArgument::REQUIRED, 'What do you want to print?')
            ->addOption('times', 't', InputArgument::OPTIONAL, 'Print N times', 2);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $text = $input->getArgument('str');
        $times = $input->getOption('times');

        if (!is_numeric($times)) {
            $times = 2;
        }

        for ($i = 0; $i < $times; $i++) {
            $output->writeln($text);
        }

        return 0;
    }
}
