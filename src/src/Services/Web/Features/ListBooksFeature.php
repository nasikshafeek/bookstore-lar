<?php

namespace App\Services\Web\Features;

use App\Domains\Book\Jobs\GetAllBooksJob;
use App\Domains\Http\Jobs\RespondWithViewJob;
use Lucid\Foundation\Feature;
use Illuminate\Http\Request;

class ListBooksFeature extends Feature
{
    public function handle(Request $request)
    {
        // Fetch books
        $books = $this->run(GetAllBooksJob::class, $request);

        // List with view
        return $this->run(new RespondWithViewJob('web::welcome', $books));
    }
}
