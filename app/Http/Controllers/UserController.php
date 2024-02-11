<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserLog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use App\Helpers\FileHelpers;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); // Ensure the user is authenticated
        $this->middleware(function ($request, $next) {
            $user = auth()->user();
            
            // Check if the user has the 'admin' role using the 'admin' gate
            if (Gate::allows('admin', $user)) {
                Log::info('admin accessed the controller.');
            }

            return $next($request);
        });
    }

    /**
     * Display list of resource.
     */
    public function index()
    {
        $users = User::orderBy("id", "desc")->get();
        return view('users.index', compact('users'));   
    }

    /**
     * Show the form for creating a new resource.
    */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
    */
    public function store(Request $request)
    {
        // Validate input data
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'in:admin,quality,hr,user'],
            'file_path' => ['required', 'file', 'mimes:jpeg,png,jpg', 'max:2048']
        ]);
    
        // Handle image upload
        if ($request->hasFile('file_path')) {
            // Get the file path from the FileHelper
            $file_path = FileHelpers::fileUpdate($request);
            // Add the file path to the validated data
            $validated['file_path'] = $file_path;
        }
    
        // Capitalize the first letter of the role and name
        $validated['role'] = ucfirst($validated['role']);
        $validated['name'] = ucwords($validated['name']);
    
        // Encrypt password
        $validated['password'] = Hash::make($validated['password']);
    
        // Create the user with validated data
        User::create($validated);
        session()->flash('success', 'Your success message here');
    
        return redirect()->route('users.index');
    }
    
    
    /**
        * Edit the specified resource.
    */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        if (! Gate::allows('edit_profile', $user)) {
            abort(403);
        }
        return view('users.create', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);
        
        // Check if the authenticated user has permission to edit the profile
        if (! Gate::allows('edit_profile', $user)) {
            abort(403);
        }
        
        // Validate the request data
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'in:admin,quality,hr,user'],
            'file_path' => ['required', 'file', 'mimes:jpeg,png,jpg', 'max:2048']
        ]);
    
        // Update user fields
        $user->name = ucwords($request->name); // Capitalize each word in the name
        $user->password = Hash::make($request->password); // Encrypt password
        $user->role = ucfirst($request->role); // Capitalize the first letter of the role
    
        // Check if a new file is uploaded and update it if necessary
        if ($request->hasFile('file_path')) {
            $newFileName = FileHelpers::fileUpdate($request);
            $oldFileName = $user->file_path;
    
            if ($oldFileName) { 
                Storage::move($newFileName, $oldFileName);
                $user->file_path = $oldFileName;
            } else {
                $user->file_path = $newFileName;
            }
        }
    
        $user->save(); // Use save() method to update the user instance
    
        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the document respective page record
        $user = User::find($id);
        
        // Delete the document record
        if ($user) {
            $file_path = $user->file_path;
            if ($file_path && Storage::exists($file_path)) {
                Storage::delete($file_path);
            }
        }
        
        // Delete the document record
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User delete successfully');
    }

    // Change Status
    public function changeStatus(Request $request)
    {
        $users = User::find($request->id);
        $users->status = $request->status;
        $users->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }


    /**
     * listing for user log data.
    */
    public function userLog()
    {
        $userLogs = UserLog::orderBy("id", "desc")->paginate(20);
        return view('users.log', compact('userLogs'));
    }
}
