<?php

namespace PharSkel\Command\Develop;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class Main
 *
 * Use this class as a template and create your own command
 *
 * @package PharSkel\Command\Develop
 */
class Main extends Command
{
    /**
     * Configure the commands arguments and options
     */
    protected function configure()
    {
        $this
            ->setName('develop:main')
            ->setDescription('Development command')

            ->addArgument(
                'arg1',                             // name
                InputArgument::REQUIRED,            // mode = null
                'Argument is defined as REQUIRED',  // description = ''
                null                                // default = null
            )

            ->addArgument(
                'arg2',
                InputArgument::OPTIONAL,
                'Argument is defined as OPTIONAL',
                null
            )

            ->addArgument(
                'arg3',
                InputArgument::IS_ARRAY,
                'Argument is defined as IS_ARRAY',
                null
            )

            ->addOption(
                'opt1',                             // name
                'o1',                               // shortcut
                InputOption::VALUE_REQUIRED,        // mode = null
                'Option is defined as REQUIRED',    // description = ''
                null                                // default = null
            )

            ->addOption(
                'opt2',
                'o2',
                InputOption::VALUE_OPTIONAL,
                'Option is defined as OPTIONAL',
                null
            )

            ->addOption(
                'opt3',
                'o3',
                InputOption::VALUE_NONE,
                'Option is defined as NONE',
                null
            )

            ->addOption(
                'opt4',
                'o4',
                InputOption::VALUE_IS_ARRAY + InputOption::VALUE_OPTIONAL,
                'Option is defined as IS_ARRAY + VALUE_OPTIONAL',
                null
            )


        ;
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return null|int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        print_r($input->getArguments());
        print_r($input->getOptions());

        try {

            // TODO: Process your command

            return 0;

        } catch (\Exception $e) {
            return $e->getCode();
        }
    }
}