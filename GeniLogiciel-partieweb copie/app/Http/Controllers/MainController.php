<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\cour;
use App\Models\module;
use App\Models\Demande;
use App\Models\Student;
use App\Models\etudiant;
use App\Models\Certificat;
use Illuminate\Http\Request;
use App\Models\demandecertificat;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    // function CheckLogine(Request $request , Certificat $certificat)
    // {
    //     $var_test =null;
    //     $test_case=null;
    //     //$certificat= Certificat::all();
    //     $check_student = Student::where('Apogee',$request->Apogee)->where('CIN',$request->CIN)->where('Email',$request->Email)->first();

    //     if(!($check_student == null)){
    //         $apogee = $request->Apogee;
    //         $nom_etu = $check_student ['Nom'];
    //         $prenom = $check_student ['Prenom'];
    //         // $tele = $check_student ['Telephone'];
    //         return view('choix',['nom_etu'=>$nom_etu,'prenom'=>$prenom]);
    //     }

    //     else
    //     {

    //         $test_case ='1';
    //         return view('welcome',['test_case'=>$test_case,'var_test'=>$var_test]);
    //     }


    // // function CheckLogin(Request $request , Certificat $certificat)
    // // {
    // //     $var_test =null;
    // //     $test_case=null;
    // //     $certificat= Certificat::all();
    // //     $check_student = Student::where('Apogee',$request->Apogee)->where('CIN',$request->CIN)->where('Email',$request->Email)->first();

    // //     if(!($check_student == null)){
    // //         $apogee = $request->Apogee;
    // //         $nom_etu = $check_student ['Nom'];
    // //         $prenom = $check_student ['Prenom'];
    // //         $tele = $check_student ['Telephone'];
    // //         return view('home',['nom_etu'=>$nom_etu,'prenom'=>$prenom,'tele'=>$tele,'certificats'=>$certificat]);
    // //     }
    // //     else
    // //     {

    // //         $test_case ='1';
    // //         return view('welcome',['test_case'=>$test_case,'var_test'=>$var_test]);
    // //     }
    
    // }

    // function demandeselect(Request $request)
    // {
    //    $choix= $request->selectionchoix;   
    //    $choixvalue = null;
    //    $check_student = Student::where('Nom',$request->first_name)->where('Prenom',$request->last_name)->first();
    //     // dd($request->first_name,$request->phone,$request->last_name);
    //     // dd($request->last_name);
    //     // dd($request->phone);
    //    if($choix=='Attestation')
    //    {
    //     $choixvalue =1;
    //         $apogee = $request->Apogee;
    //         $nom_etu = $check_student ['Nom'];
    //         $prenom = $check_student ['Prenom'];
    //         // $tele = $request->phone;
    //         return view('home',['nom_etu'=>$nom_etu,'prenom'=>$prenom,'choixvalue'=>$choixvalue]);
    //    }
    //    if($choix=='Certificat')
    //    {
    //     $certificat= Certificat::all();
    //     $apogee = $request->Apogee;
    //     $nom_etu = $check_student ['Nom'];
    //     $prenom = $check_student ['Prenom'];
    //     //$tele = $check_student ['Telephone'];
    //     $choixvalue =2;
    //         return view('home',['nom_etu'=>$nom_etu,'prenom'=>$prenom,'choixvalue'=>$choixvalue,'certificats'=>$certificat]);
    //    }

    // }


    // function Checkdata(Request $request)
    // {

    //    $test_case=null;
    //    $var_test = null ;
    //    $check_student = Student::where('Nom',$request->first_name)->where('Prenom',$request->last_name)->first();
    //     //dd($request->first_name,$request->phone,$request->last_name);
    //    // dd($check_student);
    //    $check_demande =  Demande::where('apogée',$check_student['Apogee'])->where('type',$request->selection)->first();
    //    $check_demande_certif = demandecertificat::where('Apogee',$check_student['Apogee'])->where('type_certificat',$request->selection2)->first();

    //    if($check_demande == null && !($request->selection ==null))
    //    {
    //    $var_test = 2;
    //    $demande = new Demande;
    //    $demande->type=$request->selection;
    // //    $demande->type=$request->Date;
    //    $demande->apogée=$check_student['Apogee'];
    //    $demande->etat ="Non Traitée";
    //    $demande->save();

    //    return view('welcome',['test_case'=>$test_case,'var_test'=>$var_test]);
    //    }

    //    if($check_demande_certif == null && !($request->selection2 ==null)&& !($request->selection2 =='Choisir une certification'))
    //    {
    //    $var_test = 2;
    //    $demande = new demandecertificat;
    //    $demande->type_certificat=$request->selection2;
    //    $demande->Apogee=$check_student['Apogee'];
    //    $demande->Nom=$check_student['Nom'];
    //    $demande->Prenom=$check_student['Prenom'];
    //    $demande->telephone=$request->phone;
    //    $demande->Email=$check_student['Email'];
    //    $demande->save();

    //    return view('welcome',['test_case'=>$test_case,'var_test'=>$var_test]);
    //    }
    //    else
    //    {
    //     $var_test =1;
    //    return view('welcome',['test_case'=>$test_case,'var_test'=>$var_test]);
    //    }
    // }
    
    // public function home()
    // {
    //     $test_case=null;
    //     $var_test =null;
    //     return view('welcome',['test_case'=>$test_case,'var_test'=>$var_test]);
    // }

    // public function demande()
    // {
    //     return view('home');
    // }

        //    if($check_demande_certif == null && !($request->selection2 ==null)&& !($request->selection2 =='Choisir une certification'))
    //    {
    //    $var_test = 2;
    //    $demande = new demandecertificat;
    //    $demande->type_certificat=$request->selection2;
    //    $demande->Apogee=$check_student['num_apogee'];
    //    $demande->Nom=$check_student['nom'];
    //    $demande->Prenom=$check_student['prenom'];
    //    $demande->telephone=$request->phone;
    //    $demande->Email=$check_student['email'];
    //    $demande->save();

    //    return view('welcome',['test_case'=>$test_case,'var_test'=>$var_test]);
    //    }

        //    }

            //    if($choix=='Attestation')
    //    {
        // $choixvalue =1;

    //    if($choix=='Certificat')
    //    {
    //     $certificat= cour::all();
    //     $apogee = $request->Apogee;
    //     $nom_etu = $check_student ['nom'];
    //     $prenom = $check_student ['prenom'];
    //     //$tele = $check_student ['Telephone'];
    //     $choixvalue =2;
    //         return view('home',['nom_etu'=>$nom_etu,'prenom'=>$prenom,'choixvalue'=>$choixvalue,'certificats'=>$certificat]);
    //    }
        //    $check_demande_certif = demandecertificat::where('Apogee',$check_student['num_apogee'])->where('type_certificat',$request->selection2)->first();







    function CheckLogine(Request $request)
    {
        $var_test =null;
        $test_case=null;
         
        $check_student = etudiant::where('num_apogee',$request->Apogee)->where('CIN',$request->CIN)->where('email',$request->Email)->first();

        if(!($check_student == null)){
            $apogee = $request->Apogee;
            $nom_etu = $check_student ['nom'];
            $prenom = $check_student ['prenom'];
            return view('home',['nom_etu'=>$nom_etu,'prenom'=>$prenom]);
        }

        else
        {

            $test_case ='1';
            return view('welcome',['test_case'=>$test_case,'var_test'=>$var_test]);
        }
    
    }

    function demandeselect(Request $request)
    {
       $choix= $request->selectionchoix;   
       $choixvalue = null;
       $check_student = etudiant::where('nom',$request->first_name)->where('prenom',$request->last_name)->first();


            $apogee = $request->Apogee;
            $nom_etu = $check_student ['nom'];
            $prenom = $check_student ['prenom'];
            return view('home',['nom_etu'=>$nom_etu,'prenom'=>$prenom]);


    }


    function Checkdata(Request $request)
    {

       $test_case=null;
       $var_test = null ;
       $check_student = etudiant::where('nom',$request->first_name)->where('prenom',$request->last_name)->first();
       $check_demande =  Demande::where('Apogee',$check_student['num_apogee'])->where('TypeDemande',$request->selection)->where('année_document',$request->Date)->first();

       if($check_demande == null && !($request->selection ==null)&&!($request->selection =='Choisir le type certificat'))  
       {
       $var_test = 2;
       $demande = new Demande;
       $demande->TypeDemande=$request->selection;
       $demande->nom=$check_student['nom'];
       $demande->prénom=$check_student['prenom'];
       $demande->Email=$check_student['email'];
       $demande->année_document=$request->Date;
       $demande->DateDemande = Carbon::now();
       $demande->Apogee=$check_student['num_apogee'];
       $demande->Traitement ="Non Traitée";
       $demande->save();

       return view('welcome',['test_case'=>$test_case,'var_test'=>$var_test]);
       }

       else
       {
        $var_test =1;
       return view('welcome',['test_case'=>$test_case,'var_test'=>$var_test]);
       }
    }
    
    public function home()
    {
        $test_case=null;
        $var_test =null;
        return view('welcome',['test_case'=>$test_case,'var_test'=>$var_test]);
    }

    public function demande()
    {
        return view('home');
    }


}
