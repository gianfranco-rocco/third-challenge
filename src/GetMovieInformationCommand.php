<?php

namespace Acme;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class GetMovieInformationCommand extends Command
{
    public function configure(): void
    {
        $this->setName('getMovieInformation')
            ->setDescription('Get information about the stated movie')
            ->addArgument('movie', InputArgument::REQUIRED, 'Name of the movie to get information about')
            ->addOption('fullPlot', null, InputOption::VALUE_NEGATABLE, 'Choose to wether display the entire plot of the movie or not', false);
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $movie = $input->getArgument('movie');

        return 0;
    }
}