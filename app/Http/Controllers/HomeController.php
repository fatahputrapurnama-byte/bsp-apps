<?php

namespace App\Http\Controllers;

use App\Models\Auditing;
use App\Models\Bimtek;
use App\Models\Client;
use App\Models\Consultation;
use App\Models\Contact;
use App\Models\Kajianstudy;
use App\Models\News;
use App\Models\Training;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function __construct() {
        date_default_timezone_set("Asia/Bangkok");
    }
    public function index() {
        $data = News::latest();
        $dataTraining = Training::get();
        $dataConsultation = Consultation::get();
        $dataAuditing = Auditing::get();
        $dataBimtek = Bimtek::get();
        $dataKajianstudy = Kajianstudy::get();
        $dataClient = Client::get();
        return view('landing.index',[
            "news" => $data->paginate(6)->withQueryString(),
            "training" => $dataTraining,
            "consultation" => $dataConsultation,
            "auditing" => $dataAuditing,
            "bimtek" => $dataBimtek,
            "kajianstudy" => $dataKajianstudy,
            "client" => $dataClient
        ]);
    }                                 

    public function pelatihan($id){
        $data = Training::find($id);
        // dd($data);
        $dataTraining = Training::get();
        $dataConsultation = Consultation::get();
        $dataAuditing = Auditing::get();
        $dataBimtek = Bimtek::get();
        $dataKajianstudy = Kajianstudy::get();
        return view ('pelatihan.pelatihan1',[
            "trainingDetail" => $data,
            "training" => $dataTraining,
            "consultation" => $dataConsultation,
            "auditing" => $dataAuditing,
            "bimtek" => $dataBimtek,
            "kajianstudy" => $dataKajianstudy
        ]);
    }
    
    public function konsultasi($id){
        $data = Consultation::find($id);
        $dataTraining = Training::get();
        $dataConsultation = Consultation::get();
        $dataAuditing = Auditing::get();
        $dataBimtek = Bimtek::get();
        $dataKajianstudy = Kajianstudy::get();
        return view ('konsultasi.konsultasi',[
            "consultationDetail" => $data,
            "training" => $dataTraining,
            "consultation" => $dataConsultation,
            "auditing" => $dataAuditing,
            "bimtek" => $dataBimtek,
            "kajianstudy" => $dataKajianstudy
        ]);
    }
    
    public function auditing($id){
        $data = Auditing::find($id);
        $dataTraining = Training::get();
        $dataConsultation = Consultation::get();
        $dataAuditing = Auditing::get();
        $dataBimtek = Bimtek::get();
        $dataKajianstudy = Kajianstudy::get();
        return view('auditing.auditing',[
            "auditingDetail" => $data,
            "training" => $dataTraining,
            "consultation" => $dataConsultation,
            "auditing" => $dataAuditing,
            "bimtek" => $dataBimtek,
            "kajianstudy" => $dataKajianstudy
        ]);
    }
    
    public function bimtek($id){
        $data = Bimtek::find($id);
        $dataTraining = Training::get();
        $dataConsultation = Consultation::get();
        $dataAuditing = Auditing::get();
        $dataBimtek = Bimtek::get();
        $dataKajianstudy = Kajianstudy::get();
        return view('bimtek.bimtek',[
            "bimtekDetail" => $data,
            "training" => $dataTraining,
            "consultation" => $dataConsultation,
            "auditing" => $dataAuditing,
            "bimtek" => $dataBimtek,
            "kajianstudy" => $dataKajianstudy
        ]);
    }

    public function kajianStudy($id){
        $data = Kajianstudy::find($id);
        $dataTraining = Training::get();
        $dataConsultation = Consultation::get();
        $dataAuditing = Auditing::get();
        $dataBimtek = Bimtek::get();
        $dataKajianstudy = Kajianstudy::get();
        return view('kajianstudy.kajianStudy',[
            "kajianstudyDetail" => $data,
            "training" => $dataTraining,
            "consultation" => $dataConsultation,
            "auditing" => $dataAuditing,
            "bimtek" => $dataBimtek,
            "kajianstudy" => $dataKajianstudy
        ]);
    }

    public function services(){
        $dataTraining = Training::get();
        $dataConsultation = Consultation::get();
        $dataAuditing = Auditing::get();
        $dataBimtek = Bimtek::get();
        $dataKajianstudy = Kajianstudy::get();
        return view('services',[
            "training" => $dataTraining,
            "consultation" => $dataConsultation,
            "auditing" => $dataAuditing,
            "bimtek" => $dataBimtek,
            "kajianstudy" => $dataKajianstudy
        ]);
    }

    public function contact(Request $request){
        try {
            $validated = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|max:255',
                'no_hp' => 'required|max:255',
                'pesan' => 'required',
    
            ]);
    
            Contact::create($validated);
            return response()->json([
                'message' => 'Berhasil tambah Data',
                'status' => 200
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'status' => 500
            ], 500);
        }
    }

    // public function paginateNews(Request $request){
    //     $items = News::latest()->paginate(6)->withQueryString();

    //     if ($request->ajax()) {
    //         return response()->json([
    //             'data-news' => view('landing.index', compact('items'))->render(),
    //             'pagination-news' => $items->links()->render(),
    //         ]);
    //     }

    //     return view('landing.index', compact('items'));
    // }
}
