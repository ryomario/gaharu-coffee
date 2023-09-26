<?php

namespace Modules\Quotation\Emails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class QuotationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $quotation;
    public $logo_base64;
    public $style;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($quotation)
    {
        $this->quotation = $quotation;
        $image_logo = public_path('images/logo-dark.png');
        $this->logo_base64 = base64_encode(file_get_contents($image_logo));

        $style_file = public_path('b3/bootstrap.min.css');
        $this->style = file_get_contents($style_file);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Quotation - ' . settings()->company_name)
            ->view('quotation::emails.quotation', [
                'settings' => settings(),
                'customer' => $this->quotation->customer
            ]);
    }
}
