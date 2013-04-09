<?php

namespace Zenstruck\Bundle\CacheBundle\Command;

use Buzz\Browser;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 */
class HttpCacheWarmupCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('zenstruck:http-cache:warmup')
            ->setDefinition(array(
                new InputArgument('host', InputArgument::OPTIONAL, 'The full host - ie http://www.google.com'),
                new InputOption('format', 'f', InputOption::VALUE_REQUIRED, 'progress|quiet|verbose', 'progress')
            ))
            ->setDescription('Warms up an http cache')
            ->setHelp(<<<EOF
The <info>%command.name%</info> command warms up the http cache.
EOF
        )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /** @var $registry \Zenstruck\Bundle\CacheBundle\HttpCache\UrlRegistry */
        $registry = $this->getContainer()->get('zenstruck_cache.url_registry');

        /** @var $buzz Browser */
        $buzz = $this->getContainer()->get('buzz');

        if (!count($registry->getProviders())) {
            $output->writeln('No providers registered.');
            return;
        }

        $urls = $registry->getUrls($input->getArgument('host'));
        $format = $input->getOption('format');

        if (!in_array($format, array('progress', 'quiet', 'verbose'))) {
            $output->writeln(sprintf('"%s" is an invalid format.', $format));
            return;
        }

        if (!count($urls)) {
            $output->writeln('No urls provided.');
            return;
        }

        // use the new ProgressHelper in Symfony 2.2
        $progress = null;
        if ($this->getHelperSet()->has('progress') && 'progress' == $format) {
            $progress = $this->getHelper('progress');
            $progress->start($output, count($urls));
        }

        foreach ($urls as $url) {
            $response = $buzz->get($url);

            if ('verbose' === $format) {
                $output->writeln(sprintf('%s - %s', $response->getStatusCode(), $url));
            } elseif ($progress) {
                $progress->advance();
            } elseif ('progress' === $format) {
                echo '.';
            }
        }

        if ($progress) {
            $progress->finish();
        }
    }
}
