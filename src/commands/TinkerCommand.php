<?php

namespace Limestone\Command;

use Limestone\SDK\Model\V2ProjectPostBody;
use Psy\Configuration;
use Psy\Shell;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TinkerCommand extends AbstractCommand
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'tinker';

    protected function configure()
    {
        parent::configure();

        $this
            ->setDescription('Tinker!')
            ->setHelp('This command allows tinker... just like laravel tinker');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $config = new Configuration([
            'updateCheck' => 'never'
        ]);
        $shell = new Shell($config);
        $shell->run();
        return parent::SUCCESS;
    }
}
