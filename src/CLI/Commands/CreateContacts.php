<?php

namespace Lev\Bizandsoft02\CLI\Commands;

use AmoCRM\AmoAPI;
use Lev\Bizandsoft02\Contact;
use Lev\Bizandsoft02\DataProvider\ContactDataProvider;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Logger;
class CreateContacts extends Command
{
    protected static $defaultName = "create_contacts";
    protected static $defaultDescription = "This command creates as many clients as you need";

    protected function configure(): void
    {
        $this->addOption("number",
            null,
        InputOption::VALUE_OPTIONAL,
        'number of clients',
        0);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $nubmerOfContacts = $input->getOption("number");

        if($nubmerOfContacts > 0)
            $this->activateAppAmoCRM($output);

        for($i = 0; $i < $nubmerOfContacts; $i++)
        {
            $contact = new Contact([
                "name"                => ContactDataProvider::makeFakeName(),
            ]);
            $phoneNumbers = $this->createFakeData(2,fn () => ContactDataProvider::makeFakePhone());
            $emails = $this->createFakeData(2,fn() => ContactDataProvider::makeFareEmail());

            $id = $contact->createContact($phoneNumbers,$emails);

            $output->writeln("Contact with ID ($id) has been created");
        }
        $output->writeln("[END OF COMMANDS] $nubmerOfContacts contacts created");

        return 0;
    }

    private function activateAppAmoCRM(OutputInterface $output): void
    {
        $output->writeln("start connect to amoCRM");

        AmoAPI::oAuth2(
            $_ENV['BASE_DOMAIN'],
            $_ENV['CLIENT_ID'],
            $_ENV['CLIENT_SECRET'],
            $_ENV['REDIRECT_URL'],
        );

        $output->writeln("The connection was successful");
    }

    private function createFakeData(int $items,callable $dataProvider): array
    {
        $res = [];
        for($i = 0;$i < $items;$i++)
        {
            $res[] = $dataProvider();
        }
        return $res;
    }
}