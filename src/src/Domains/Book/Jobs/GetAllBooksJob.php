<?php

namespace App\Domains\Book\Jobs;

use Lucid\Foundation\Job;

class GetAllBooksJob extends Job
{
    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     */
    public function handle()
    {
        return [
            'books' => [
                [
                    'name' => 'Harry Potter and the Order of Phoenix',
                    'author'=> 'J.K. Rowling',
                    'price'=> '1000',
                ],
                [
                    'name' => 'Flawed',
                    'author'=> 'Cecilia Ahern',
                    'price'=> '1100',
                ],
                [
                    'name' => 'The Jungle Book',
                    'author'=> 'Rudyard Kipling',
                    'price'=> '1200',
                ],
                [
                    'name' => 'Perfect',
                    'author'=> 'Cecilia Ahern',
                    'price'=> '1300',
                ],
                [
                    'name' => 'Harry Potter and the Sorcerer\'s Stone',
                    'author'=> 'J. K. Rowling',
                    'price'=> '1800',
                ],
            ]
        ];
    }
}
