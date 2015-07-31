<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
// use Illuminate\Foundation\Inspiring;
use App\User;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emails:send {uid} {--queue=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Emails.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        // $this->comment(PHP_EOL.Inspiring::quote().PHP_EOL);
        // $users = User::all();
        // $this->output->progressStart(count($users));
        // foreach ($users as $user) {
        //     $this->performTask($user);
        //     $this->output->progressAdvance();
        // }
        // $this->output->progressFinish();
        // dd(1111);
        // $headers = ['Name', 'Email'];
        // $users = User::all(['name', 'email'])->toArray();
        // $this->table($headers, $users);

        // $this->info('Display this on the screen');
        // $name = $this->anticipate('What is your name?', ['Taylor', 'Dayle'], false);
        // dd($name);
        // $userId = $this->ask('What is your uid?');
        // $password = $this->secret('What is the password?');
        // if ($this->confirm('Do you wish to continue? [y|N]')) {
        //     //
        //     dd($password);
        // }
        $uid = $this->argument('uid');
        // $arguments = $this->argument();
        // $queueName = $this->option('queue');
        // dd($queueName);
        User::where(['id' => $uid])->update(['status' => 1]);
    }

    private function performTask(User $user)
    {
        echo ' ', $user->name, PHP_EOL;
    }
}
