<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\Question;

class AskQuestionPrintAnswer extends Command
{
    protected function configure()
    {
        $this
            ->setName('ask_print')
            ->setDescription('Ask - print');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');
        $questionName = new Question('Ваше имя?' . PHP_EOL, 'noname');
        $questionAge = new Question('Ваш возраст?' . PHP_EOL);
        $questionGender = new ChoiceQuestion('Ваше пол? ', ['м', 'ж']);

        $name = $helper->ask($input, $output, $questionName);
        $age = $helper->ask($input, $output, $questionAge);
        $gender = $helper->ask($input, $output, $questionGender);

        $resultStr = "Ваше имя: " . $name;
        if (is_numeric($age)) {
            $resultStr .= ", возраст: " . $age;
        }
        $resultStr .= ", пол: " . $gender;

        $output->writeln($resultStr);

        return 0;
    }
}
