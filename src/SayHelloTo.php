<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SayHelloTo extends Command
{
    protected function configure()
    {
        $this
            ->setName('say_hello')
            ->setDescription('Say hello o phrase')
            ->addArgument('phrase', InputArgument::REQUIRED, 'Who do you wand say hello?');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $text = "Привет " . $input->getArgument('phrase');

        $output->writeln($text);

        return 0;
    }
}
