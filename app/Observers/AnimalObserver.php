<?php

namespace App\Observers;

use App\Models\Animal;

class AnimalObserver
{
    /**
     * Handle the animal "created" event.
     *
     * @param  \Models\Animal  $animal
     * @return void
     */
    public function created(Animal $animal)
    {
        $animal->code = date('Ymd').$animal->id;
        $animal->save();
    }

    /**
     * Handle the animal "updated" event.
     *
     * @param  \Models\Animal  $animal
     * @return void
     */
    public function updated(Animal $animal)
    {
        //
    }

    /**
     * Handle the animal "deleted" event.
     *
     * @param  \Models\Animal  $animal
     * @return void
     */
    public function deleted(Animal $animal)
    {
        //
    }

    /**
     * Handle the animal "restored" event.
     *
     * @param  \Models\Animal  $animal
     * @return void
     */
    public function restored(Animal $animal)
    {
        //
    }

    /**
     * Handle the animal "force deleted" event.
     *
     * @param  \Models\Animal  $animal
     * @return void
     */
    public function forceDeleted(Animal $animal)
    {
        //
    }
}
