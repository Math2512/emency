<?php

namespace App\Observers;

use Cocur\Slugify\Slugify;
use App\Models\Realisation;

class RealisationObserver
{
    /**
     * Handle the Realisation "created" event.
     *
     * @param  \App\Models\Realisation  $realisation
     * @return void
     */
    public function created(Realisation $realisation)
    {
        $instance = new Slugify();
        $realisation->slug = $instance->slugify($realisation->client);
        $realisation->save();
    }

    /**
     * Handle the Realisation "updated" event.
     *
     * @param  \App\Models\Realisation  $realisation
     * @return void
     */
    public function updated(Realisation $realisation)
    {
        //
    }

    /**
     * Handle the Realisation "deleted" event.
     *
     * @param  \App\Models\Realisation  $realisation
     * @return void
     */
    public function deleted(Realisation $realisation)
    {
        //
    }

    /**
     * Handle the Realisation "restored" event.
     *
     * @param  \App\Models\Realisation  $realisation
     * @return void
     */
    public function restored(Realisation $realisation)
    {
        //
    }

    /**
     * Handle the Realisation "force deleted" event.
     *
     * @param  \App\Models\Realisation  $realisation
     * @return void
     */
    public function forceDeleted(Realisation $realisation)
    {
        //
    }
}
