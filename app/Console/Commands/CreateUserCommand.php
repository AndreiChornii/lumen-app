<?php

use App\Console\Commands;

use App\Events\UserCreated;
use App\Models\User;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateUserCommand extends Command
{
    public $name = 'create:user';

    public function execute(InputInterface $input, OutputInterface $output){
        $user = new User();
        $user->email = 'test@mail.com';

        event(UserCreated::class, $user);

        return Command::SUCCESS;
    }
}
