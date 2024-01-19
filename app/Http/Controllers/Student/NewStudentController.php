<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia('NewStudent/IndexPage');
    }


    public function confirm_student(Request $request)
    {
        $request->validate([
            'regnum' => ['required']
        ]);

        try{
            $url = env('API_BASE_URL').'/RegisteredStudent.php';
            $username = env('API_USERNAME');
            $password = env('API_PASSWORD');

            $form = [
                'regnum' => $request->regnum
            ];

            $response = Http::withBasicAuth($username, $password)
            ->asForm()
            ->post($url, $form);

            if ($response->successful()) {
                $data = $response->json();
                //dd($data);
                return inertia('NewStudent/ConfirmStudent', [
                    'student' => $data
                ]);
            } else {
                $status = $response->status();
                $error = $response->body();
                if($status == 404){
                    return back()->withErrors(['error'=>'Provided student may not be registered or valid!']);
                }
                return back()->withErrors(['error'=>'Server error occured!']);
            }
        }catch(\Exception $e){
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function upload_student_image(Request $request)
    {
        
    }
}
