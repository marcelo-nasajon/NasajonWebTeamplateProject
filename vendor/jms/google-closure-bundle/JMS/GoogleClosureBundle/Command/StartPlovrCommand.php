<?php

/*
 * Copyright 2011 Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace JMS\GoogleClosureBundle\Command;

use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;

/**
 * Starts the Plovr server.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class StartPlovrCommand extends BaseCommand
{
    protected function configure()
    {
        $this
            ->setName('plovr:start')
            ->setDescription('Starts the Plovr server')
            ->addArgument('config', InputArgument::IS_ARRAY, 'The configuration file(s) to use')
        ;

        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $javaBin = $this->locateJavaBin($input);
        $plovrJar = $this->locatePlovrJar($input);
        $configPaths = $this->processPlovrConfig($input->getArgument('config'));

        $this->runJar($output, $javaBin, $plovrJar, 'serve '.implode(' ', array_map('escapeshellarg', $configPaths)));

        $this->cleanupPloverConfig($configPaths);
    }
}
