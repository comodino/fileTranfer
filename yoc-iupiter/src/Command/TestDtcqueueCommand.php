<?php

namespace App\Command;

use App\Worker\TestDtcQueueWorker;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class TestDtcqueueCommand extends Command
{
    protected static $defaultName = 'app:test:dtcqueue';

    protected function configure()
    {
        $this
            ->setDescription('Test per il componente DtcQueue: invia mail')
        ;
    }

    /**
     * @var TestDtcQueueWorker $worker
     */
    private $worker;

    public function __construct(TestDtcQueueWorker $worker)
    {
        $this->worker = $worker;
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->worker->later(30)->testSendMail();
    }
}
