<?php

namespace Modules\Serials\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Modules\User\Entities\User;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendMailWarranty extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * The user entity.
     *
     * @var \Modules\User\Entities\User
     */
    public $user;

    /**
     * Reset complete form url.
     *
     * @var string
     */
    public $produc_name;
    public $serial_no;

    /**
     * Create a new instance.
     *
     * @param \Modules\User\Entities\User $user
     * @param string $url
     *
     * @return void
     */
    public function __construct($user, $produc_name,$serial_no)
    {
        $this->user = $user;
        $this->produc_name = $produc_name;
        $this->serial_no = $serial_no;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.send_warranty')
            ->subject(trans('user::email.get_have_warranty_data'));
    }
}
