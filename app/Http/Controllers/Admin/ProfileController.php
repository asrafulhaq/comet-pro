<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    

    /**
     * Show admin pofile page 
     */
    public function showAdminProfilePage()
    {
        return view('admin.profile.profile');
    }


}
