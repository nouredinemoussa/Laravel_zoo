<?php

namespace App\Observers;


use App\Models\Animals;
use App\Mail\AnimalCreated;
use Illuminate\Support\Facades\Mail;

class AnimalObserver
{
    /**
     * Handle the Animal "created" event.
     */
    public function created(Animals $animal): void
    {
        Mail::to('admin@zoo.com')->send(new AnimalCreated($animal));
    }

    /**
     * Handle the Animal "updated" event.
     */
    public function updated(Animals $animal): void
    {
        //
    }

    /**
     * Handle the Animal "deleted" event.
     */
    public function deleted(Animals $animal): void
    {
        //
    }

    /**
     * Handle the Animal "restored" event.
     */
    public function restored(Animals $animal): void
    {
        //
    }

    /**
     * Handle the Animal "force deleted" event.
     */
    public function forceDeleted(Animals $animal): void
    {
        //
    }
}
