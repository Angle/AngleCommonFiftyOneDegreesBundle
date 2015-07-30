<?php

namespace Angle\Common\FiftyOneDegreesBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class BinaryUpdateCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('angle:fiftyonedegrees:update')
            ->setDescription("Update 51 Degrees binary file");
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Updating 51 Degrees binary file it may take awhile please be patient...");

        $fiftyOneDegrees = $this->getContainer()->get('angle_common_fifty_one_degrees');
        $fiftyOneDegrees->updateBinary();

    }

}