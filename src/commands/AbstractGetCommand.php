<?php

namespace Limestone\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class AbstractGetCommand extends AbstractCommand
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName;
    protected ?string $command_description = null;
    protected ?string $command_help = null;

    protected function configure()
    {
        parent::configure();

        if ($this->command_description) {
            $this->setDescription($this->command_description);
        }

        if ($this->command_help) {
            $this->setHelp($this->command_help);
        }
    }

    /**
     * Execute the get command and output the result
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return integer
     */
    protected function execute(InputInterface $input, OutputInterface $output): ?int
    {
        $client = $this->getClient();
        $result = $this->getResult($client);
        return $this->handleResult(
            strtolower($input->getOption('format')), $output, $result
        ) ?? parent::SUCCESS;
    }

    /**
     * Fetch the "get" data from the API and return the data set
     *
     * @param \Limestone\SDK\Client $client
     * @return void
     */
    abstract protected function getResult(\Limestone\SDK\Client $client);

    /**
     * Output the data using the selected formatter
     *
     * @param [type] $data
     * @return integer|null
     */
    protected function handleResult(
        string $output_format, OutputInterface $output, $data
    ): ?int {
        if (!in_array($output_format, $this->supported_output)) {
            throw new \Exception(
                'Invalid output format selected. Valid options are: '.
                implode(', ', $this->supported_output)
            );
        }
        return call_user_func(
            [$this, 'outputFormat'.ucfirst($output_format)],
            $output, $data
        );
    }

    protected function outputFormatJson(
        OutputInterface $output, $data
    ): ?int {
        return $this->outputJsonArray($output, $this->toArray($data));
    }

    protected function outputFormatTable(
        OutputInterface $output, $data
    ): ?int {
        return $this->outputGenericTable(
            $output, $this->getTableHeader(), $this->getTableRows($data)
        );
    }

    protected function getTableHeader(): ?array
    {
        return null;
    }

    protected function getTableRows($data): ?array
    {
        return null;
    }
}
