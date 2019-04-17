<?php

namespace App\Worker;

use Dtc\QueueBundle\Model\Worker;
use Twig\Environment;

class TestDtcQueueWorker extends Worker
{
    /**
     * @var \Swift_Mailer $mailer
     */
    private $mailer;

    private $engine;

    public function __construct(\Swift_Mailer $mailer, Environment $engine) {
        $this->mailer = $mailer;
        $this->engine = $engine;
    }

    public function testSendMail()
    {
        $message = (new \Swift_Message('Test uso di DtcQueue'))
            ->setFrom('send@example.com')
            ->setTo('recipient@example.com')
            ->setBody(
                $this->engine->render(
                    'email/testDtcQueue.html.twig'
                ),
                'text/html'
            )
        ;

        $this->mailer->send($message);
    }

    public function getName() {
        return 'testDtc';
    }

}
