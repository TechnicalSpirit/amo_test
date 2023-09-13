<?php

namespace Lev\Bizandsoft02\CLI\Commands;

use AmoCRM\AmoAPI;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Output\OutputInterface;
use \Symfony\Component\Console\Input\InputInterface;
class RegisterAppAmoCRM extends Command
{
    protected static $defaultName = "register_app";
    protected static $defaultDescription = "register app in amoCRM for the first time";

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("start register app");

        AmoAPI::oAuth2(
            $_ENV['BASE_DOMAIN'],
            $_ENV['CLIENT_ID'],
            $_ENV['CLIENT_SECRET'],
            $_ENV['REDIRECT_URL'],
            $_ENV['CODE']
        );

        $output->writeln("The register was successful");

        return 0;
    }
}