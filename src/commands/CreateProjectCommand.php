<?php

namespace Limestone\Command;

use Limestone\SDK\Model\V2ProjectPostBody;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateProjectCommand extends AbstractCommand
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'project:create';

    protected function configure()
    {
        parent::configure();

        $this
            ->setDescription('Creates a new project.')
            ->addArgument('display_name',null,'The display name of the project')
            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command allows you to create a project...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $client = $this->getClient();
        $body = new V2ProjectPostBody();
        $body->setDisplayname($input->getArgument('display_name'));
        $result = $client->storeProject($body);
        $output->write($result->getProjectId(),true);
        return parent::SUCCESS;
    }
}
