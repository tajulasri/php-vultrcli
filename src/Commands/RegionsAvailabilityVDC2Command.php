<?php

namespace Vultr\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Vultr\Regions;

class RegionsAvailabilityVDC2Command extends Command
{
    protected function configure()
    {
        $this
            ->setName('regions:availability_vdc2')
            ->setDescription('Get a list of the vdc2 VPSPLANIDs currently available in this location.')
            ->addArgument('DCID', InputArgument::REQUIRED, 'location DCID integer');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $regions = (new Regions())->availability_vdc2($input->getArgument('DCID'));
        $output->write($regions);
    }
}
