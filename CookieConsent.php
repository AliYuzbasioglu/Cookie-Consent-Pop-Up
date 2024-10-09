<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CookieConsent extends Component
{
    public $consent;

    public function getConsent()
    {
        $this->consent = DB::table('sessions')
        ->where('ip_address',request()->ip())
        ->where('user_agent',request()->userAgent())
        ->where('consent', null)->get();
        if($this->consent){
            DB::table('sessions')
            ->where('ip_address',request()->ip())
            ->where('user_agent',request()->userAgent())
            ->where('consent', null)
            ->update([
                'consent' => 'consent-given'
            ]);
        }
    }
    public function render()
    {
        $this->consent = DB::table('sessions')
        ->where('ip_address',request()->ip())
        ->where('user_agent',request()->userAgent())
        ->where('consent', 'consent-given')->first();

        return view('livewire.cookie-consent');
    }
}
