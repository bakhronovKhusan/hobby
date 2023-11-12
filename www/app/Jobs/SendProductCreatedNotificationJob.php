<?php

namespace App\Jobs;

use App\Notifications\ProductCreatedNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Notification;

class SendProductCreatedNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $product;

    public function __construct($product)
    {
        $this->product = $product;
    }

    public function handle()
    {
        $email = config('products.email');
        Notification::route('mail', $email)->notify(new ProductCreatedNotification($this->product));
    }
}
