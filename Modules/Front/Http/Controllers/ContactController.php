<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Setting\Services\ContactService;

class ContactController extends Controller
{
    /**
     * @var $contactService
     */
    protected $contactService;

    /**
     * Constructor
     *
     * @param ContactService $contactService
     */

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    public function index()
    {
        $contact = $this->contactService->first();
        return view('front::contact.index', compact('contact'));
    }
}
