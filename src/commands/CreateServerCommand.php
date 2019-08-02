<?php

namespace Limestone\Command;

use Limestone\SDK\Model\ServerCreateParametersWithOSDisk;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateServerCommand extends Command
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'server:create';

    protected function configure()
    {
        $this
            ->setDescription('Creates a new server.')
            ->addArgument('project_id',InputArgument::REQUIRED,'The project id')
            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command allows you to create a project...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $client = $this->getClient();
        $meta = new \ArrayObject(["unit"=>"LSN"]);
        $params = ["core"=>"fc96732c-4c5", "name"=>"test server", "description" => "test server", "image" => "centos-7", "sshKeys" => [], "networks" => ["public", "private"], "quantity" => 1, "tags" => ["dev"], "adminPassword" => "foobar", "customMetadata"=>$meta,"facility"=>"DFW1", "osDisk"=>"/dev/sdc", "userData"=>"echo test"];
        $body = new ServerCreateParametersWithOSDisk();
        $reflection = new \ReflectionClass($body);
        $methods = $reflection->getMethods();
        $toCall = [];
        foreach ($methods as $method) {
            if(strpos($method->getName(),'set') === 0){
                $toCall[] = $method->getName();
            }
        }
        $re = '/set(\w*)/m';
        foreach ($toCall as $item) {
            preg_match($re, $item, $matches);
            if(isset($matches[1]) && isset($params[lcfirst($matches[1])])){
                $body->$item($params[lcfirst($matches[1])]);
            }

        }
        try{
            $result = $client->storeProjectServer($input->getArgument('project_id'),$body);
            $output->write($result,true);
        } catch (\Exception $e){
            $output->write($e->getMessage(),true);
        }
    }
}