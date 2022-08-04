<?php

namespace Acme;

use Acme\Services\OMDbService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Exception;

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
        try {
            $omdbService = new OMDbService($input->getOption('fullPlot'));

            $movieInformation = $omdbService->getMovieInformation($input->getArgument('movie'));

            if ($movieInformation->Response == 'False') {
                throw new Exception($movieInformation->Error);
            }

            if ($movieInformation->Ratings != 'N/A') {
                $movieInformation->Ratings = $omdbService->stringifyRatings($movieInformation->Ratings);
            }

            $output->writeln("<info>{$movieInformation->Title} - {$movieInformation->Year}</info>");

            (new Table($output))->setRows($omdbService->getRowsForTableRender($movieInformation))->render();
        } catch (\Throwable $t) {
            $output->writeln("<error>{$t->getMessage()}</error>");
        }
    
        return 0;
    }
}