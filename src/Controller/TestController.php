<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Message;
use App\Entity\Messages2;
use App\Entity\User;
use App\Entity\User2;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TestController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {
    }

    #[Route('/test')]
    public function index(): Response
    {
//        /** @var User $user */
//        $user = $this->entityManager->find(User::class, 3);
//
//        foreach ($user->getSentMessages() as $message) {
//            dump(
//                $message
//                    ->getRecipient()
//                    ->getId()
//            );
//            dump(
//                $message
//                    ->getRecipient()
//                    ->getUsername()
//            );
//            dump(
//                $message
//                    ->getRecipient()
//                    ->getReceivedMessages()
//                    ->map(fn(Message $m) => $m
//                        ->getSender()
//                        ->getSentMessages()->map(
//                            fn(Message $m2) => $m2->getSender()->getUsername()
//                        )
//                    )
//            );
//        }


//        $senders = [];
//        foreach (range(1, 10) as $i) {
//            $s = new User2();
////            $s->setUsername('user' . $i);
//            $s->username = 'user'.$i;
//            $senders[] = $s;
//
//            $this->entityManager->persist($s);
//        }
//
//
//        foreach (range(1, 100) as $i) {
//            $s = $senders[rand(0, count($senders) - 1)];
//            $r = $senders[rand(0, count($senders) - 1)];
//
//            $m = new Messages2();
//            $m->setSender($s);
//            $m->setRecipient($r);
//            $m->setMessage('Test ' . $i);
//
//            $this->entityManager->persist($m);
//        }
//
//        $this->entityManager->flush();
//   $senders = [];
//        foreach (range(1, 10) as $i) {
//            $s = new User();
//            $s->setUsername('user' . $i);
////            $s->username = 'user'.$i;
//            $senders[] = $s;
//
//            $this->entityManager->persist($s);
//        }
//
//
//        foreach (range(1, 100) as $i) {
//            $s = $senders[rand(0, count($senders) - 1)];
//            $r = $senders[rand(0, count($senders) - 1)];
//
//            $m = new Message();
//            $m->setSender($s);
//            $m->setRecipient($r);
//            $m->setMessage('Test ' . $i);
//
//            $this->entityManager->persist($m);
//        }


//        foreach(range(1,1000) as $i) {
//            $user = new User2();
//            $user->username = 'haha'.$i;
//            $this->entityManager->persist($user);
//        }
//
//
//        $this->entityManager->flush();
//        dump($user->id);


        $userRepo = $this->entityManager->getRepository(User::class);;
        $users = $userRepo->findBy([
            'id' => [3,4,6]
        ]);
        dump($users);

        $messages = $this->entityManager->getRepository(Message::class)->findBy([
            'id' => [84, 82]
        ]);
        dump($messages);
        /** @var Message $message */
        foreach($messages as $message) {
            dump($message->getSender()->getUsername());
            dump($message->getRecipient()->getUsername());
        }

        return new Response('');
    }
}
