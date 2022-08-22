<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Interview1;
use App\Interview3;
use App\Interview4;
use App\InterviewApp;
use App\Geo;
use App\Contact;
use DB;

class ApplicationFormController extends Controller
{

  // =================================== STAGE 1 =================================================================

    public function application_stage_1(Request $request){
      $this->validate($request, [
        'role' => 'required',
        'tit' => 'required',
        'f_name' => 'required',
        'l_name' => 'required',
        'dob' => 'required',
        'telephone' => 'required',
        'email' => 'required',
        'ni' => 'required'
        ]);

        if($request->input('tit') == 'Mr'){
          $gen = 'Male';
        } else {
          $gen = 'Female';
        }

        //Catch duplication errors
        try{

          //Create New Applicant - Interview Table
          $app = new Interview1;
          $app->tit = $request->input('tit');
          $app->f_name = $request->input('f_name');
          $app->l_name = $request->input('l_name');
          $app->dob = $request->input('dob');
          $app->telephone = $request->input('telephone');
          $app->ind_num = 'app001';
          $app->time_now = now();
          $app->active = 'Field';
          $app->gender = $gen;
          $app->drugs = 'Yes';
          $app->checker = $request->input('telephone').$request->input('f_name');
          //Temp Default Values
          $app->agency = '';
          $app->office = '';
          $app->driver = '';
          $app->region = '';
          $app->crim = '';
          $app->crim_det = '';
          $app->save();

          $checker = $request->input('telephone').$request->input('f_name');
          $appId = Interview1::where('checker', $checker)->take(1)->get();
          foreach ($appId as $id){
            $idapp = $id->indice;
          }

          //Set SESSION ID for Applicant
          session()->put('idapp', $idapp);

          //Add New Applicant - Interview3 Table
          $app3 = new Interview3;
          $app3->email = $request->input('email');
          $app3->ni = $request->input('ni');
          $app3->id = $idapp;
          $app3->time_update = now();
          //Temp Default Values
          $app3->nat = '';
          $app3->coo = '';
          $app3->add1 = '';
          $app3->add2 = '';
          $app3->add3 = '';
          $app3->add4 = '';
          $app3->add5 = '';
          $app3->geo_lat = '51.681110';
          $app3->geo_lon = '-3.177016';
          $app3->nok1 = '';
          $app3->nok2 = '';
          $app3->nok3 = '';
          $app3->nok4 = '';
          $app3->wtr = '';
          $app3->save();

          //Add New Applicant InterviewApp Table
          $appT = new InterviewApp;
          $appT->role = $request->input('role');
          $appT->home_tel = $request->input('home_tel');
          $appT->id = $idapp;
          //Temp Default Values
          $appT->rtw = '';
          $appT->rtw_exp = date('Y-m-d');
          $appT->pos = '';
          $appT->rotation = '';
          $appT->fashion = '';
          $appT->stock_ord = '';
          $appT->pro_man = '';
          $appT->supervisor = '';
          $appT->days = '';
          $appT->evenings = '';
          $appT->nights = '';
          $appT->saturday = '';
          $appT->sunday = '';
          $appT->all_types = '';
          $appT->cv = '';
          $appT->com = '0';
          $appT->save();

        } catch (\Illuminate\Database\QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                return back()->with('error', 'You have already started an application - please click the `Continue with a Previously Started Application` button to continue.');
            }
        }

        return redirect('/apply_online2')->with('success', 'Stage 1 Accepted - Please continue with Stage 2');

    } // End of Stage 1 Method


    // ========================================= STAGE 2 ===========================================================


    public function application_stage_2(Request $request){
      $this->validate($request, [
        'add1' => 'required',
        'add2' => 'required',
        'add3' => 'required',
        'add4' => 'required',
        'add5' => 'required',
        'region' => 'required',
        'rtw' => 'required',
        'nat' => 'required',
        'coo' => 'required',
        'nok1' => 'required',
        'nok2' => 'required',
        'nok3' => 'required'
        ]);

        // Get Session idapp Applicant ID
        $idapp = session('idapp');

        //Update Interview1 Table (interview_data)
        $region = Interview1::find($idapp);
        $region->region = $request->input('region');
        $region->save();

        //Update Interview3 Table (interview_data_3)
        // Determine interview_data_3 record index
        $data = Interview3::where('id', session('idapp'))->take(1)->get();

        $geo = Geo::where('postcode', $request->input('add5'))->take(1)->get();
          foreach($geo AS $g){
            $lat = $g->lat;
            $lon = $g->lon;
          }

        if(count($data) > 0){
          foreach($data AS $d){
            $id3 = $d->indice;
            $dt3 = Interview3::find($id3);
            $dt3->add1 = $request->input('add1');
            $dt3->add2 = $request->input('add2');
            $dt3->add3 = $request->input('add3');
            $dt3->add4 = $request->input('add4');
            $dt3->add5 = $request->input('add5');
            $dt3->nat = $request->input('nat');
            $dt3->coo = $request->input('coo');
            $dt3->nok1 = $request->input('nok1');
            $dt3->nok2 = $request->input('nok2');
            $dt3->nok3 = $request->input('nok3');
            $dt3->geo_lat = $lat;
            $dt3->geo_lon = $lon;
            $dt3->save();
          }
        }

        //Update InterviewApp Table (interview_data_applications)
        $rtwexp = $request->input('rtw_exp');
        if($rtwexp == ''){$rtwexp = null; }
        // Determine interview_data_applications record index
        $data2 = InterviewApp::where('id', session('idapp'))->take(1)->get();
          if(count($data2) > 0){
            foreach($data2 AS $d2){
              $id2 = $d2->indice;
              $dtApp = InterviewApp::find($id2);
              $dtApp->rtw = $request->input('rtw');
              $dtApp->rtw_exp = $rtwexp;
              $dtApp->save();
            }
          }


          return redirect('/apply_online3')->with('success', 'Stage 2 Accepted - Please continue with Stage 3');
    } // End of Stage 2 method

    // ========================================== STAGE 3==========================================================
    public function application_stage_3(Request $request){
      $this->validate($request, [
        'driver' => 'required'
        ]);


        // Get Session idapp Applicant ID
        $idapp = session('idapp');

        //Update Interview1 Table (interview_data)
        $driver = Interview1::find($idapp);
        $driver->driver = $request->input('driver');
        $driver->save();

        //Insert into Interview4 Table (interview_data_4)
        //Catch duplication errors
        try{

        //Create New Applicant - Interview Table 4
        $app1 = new Interview4;
        $app1->syst = $request->input('syst')?$request->input('syst'):'No';
        $app1->mer = $request->input('mer')?$request->input('mer'):'No';
        $app1->cnt_bal = $request->input('cnt_bal')?$request->input('cnt_bal'):'No';
        $app1->ppt = $request->input('ppt')?$request->input('ppt'):'No';
        $app1->ipaf = $request->input('ipaf')?$request->input('ipaf'):'No';
        $app1->seirs = $request->input('seirs')?$request->input('seirs'):'No';
        $app1->sssts = $request->input('sssts')?$request->input('sssts'):'No';
        $app1->smsts = $request->input('smsts')?$request->input('smsts'):'No';
        $app1->frst_aid = $request->input('frst_aid')?$request->input('frst_aid'):'No';
        $app1->cscs = $request->input('cscs')?$request->input('cscs'):'No';
        $app1->time_update2 = now();
        $app1->mple = '';
        $app1->bendi = '';
        $app1->wv_cdy = '';
        $app1->lst = '';
        $app1->iosh = '';
        $app1->sup = '';
        $app1->id = $idapp;
        $app1->save();

        } catch (\Illuminate\Database\QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                return back()->with('error', 'You have already started an application - please click the `Continue with a Previously Started Application` button to continue.');
            }
       }

        //Update InterviewApp Table (interview_data_applications)
        // Determine interview_data_applications record index
        $data3 = InterviewApp::where('id', session('idapp'))->take(1)->get();
        if(count($data3) > 0){
          foreach($data3 AS $d3){
            $id3 = $d3->indice;
            $dtApp = InterviewApp::find($id3);
            $dtApp->pos = $request->input('pos')?$request->input('pos'):'No';
            $dtApp->rotation = $request->input('rotation')?$request->input('rotation'):'No';
            $dtApp->fashion = $request->input('fashion')?$request->input('fashion'):'No';
            $dtApp->stock_ord = $request->input('stock_ord')?$request->input('stock_ord'):'No';
            $dtApp->pro_man = $request->input('stock_ord')?$request->input('stock_ord'):'No';
            $dtApp->supervisor = $request->input('supervisor')?$request->input('supervisor'):'No';
            $dtApp->days = $request->input('days')?$request->input('days'):'No';
            $dtApp->evenings = $request->input('evenings')?$request->input('evenings'):'No';
            $dtApp->nights = $request->input('nights')?$request->input('nights'):'No';
            $dtApp->saturday = $request->input('saturday')?$request->input('saturday'):'No';
            $dtApp->sunday = $request->input('sunday')?$request->input('sunday'):'No';
            $dtApp->all_types = $request->input('all_types')?$request->input('all_types'):'No';
            $dtApp->save();
          }
        }

        return redirect('/apply_online4')->with('success', 'Stage 3 Accepted - Please continue with Stage 4');
    } // End of Stage 3 Method



    // ========================================== STAGE 4 ==========================================================
    public function application_stage_4(Request $request){
      $this->validate($request, [
        'wtr' => 'required',
        'crim' => 'required'
        ]);

        // Get Session idapp Applicant ID
        $idapp = session('idapp');

        //Update Interview1 Table (interview_data)
        $dt = Interview1::find($idapp);
        $dt->crim = $request->input('crim');
        $dt->crim_det = $request->input('crim_det')?$request->input('crim_det'):'';
        $dt->save();


        //Update Interview3 Table (interview_data_3)
        // Determine interview_data_3 record index
        $data4 = Interview3::where('id', session('idapp'))->take(1)->get();
          if(count($data4) > 0){
            foreach($data4 AS $d4){
              $id4 = $d4->indice;
              $dt4 = Interview3::find($id4);
              $dt4->wtr = $request->input('wtr');
              $dt4->save();
            }
          }


          return redirect('/apply_online5')->with('success', 'Stage 4 Accepted - Please continue with Stage 5');
    } // End of Stage 4 Method


    // ========================================== STAGE 5 ==========================================================

    public function application_stage_5 (Request $request){
      $this->validate($request, [
        'resume' => 'required|mimes:pdf,doc,docx,zip|max:2048',
        'submitted_application' => 'required'
        ]);

        // Get Session idapp Applicant ID
        $idapp = session('idapp');

        if (isset($_POST['submitted_application'])) { // Handle the form.

          // Upload CV files - doc

          $fileName=$_FILES["resume"]["name"];
          $fileSize=$_FILES["resume"]["size"]/1024;
          $fileType=$_FILES["resume"]["type"];
          $fileTmpName=$_FILES["resume"]["tmp_name"];


          if($fileType=="application/msword" || $fileType=="application/pdf" || $fileType=="application/vnd.openxmlformats-officedocument.wordprocessingml.document"){
          if($fileSize<=2048){

            //New file name
            $newFileName = time().$fileName;

            //File upload path
            $uploadPath="../../cornerstone/storage/app/public/cv/".$newFileName;

          //function for upload file
          if(move_uploaded_file($fileTmpName,$uploadPath)){
            copy($uploadPath, '/home/sites/cornerstoneretail.co.uk/public_html/cornerstone/storage/cv/'.$newFileName);
            $cv = "../../../../../cornerstone/storage/cv/".$newFileName;

            //Update InterviewApp Table (interview_data_applictions)
            // Determine interview_data_applications record index
            $data5 = InterviewApp::where('id', session('idapp'))->take(1)->get();
            if(count($data5) > 0){
              foreach($data5 AS $d5){
                $id5 = $d5->indice;
                $dt5 = InterviewApp::find($id5);
                $dt5->cv = $cv;
                $dt5->save();
              }
            }

            return redirect('/apply_online6')->with('success', 'C.V. Upload Successful. Your Application is complete. Thank you!');
          }
          }
          else{
            return back()->with('error', 'Maximum upload file size limit is 2 Mb');
          }
          }
          else{
            return back()->with('error', 'You can only upload a Word doc file or PDF files.');
          }

        } // Endif submitted_application

    } // End of Stage 5 Method




    // ========================================= NI CHECK LOGIN ===========================================================


    public function ni_check(Request $request){
      $this->validate($request, [
        'ni' => 'required'
      ]);

      $ni = $request->input('ni');
      $stage1 = $stage2 = $stage3 = $stage4 = $stage5 = false;

      $nicheck = Interview3::where('ni', $ni)->take(1)->get();
      foreach ($nicheck as $app_pos){
        $stage1 = $app_pos->ni;
        $stage2 = $app_pos->add1;
        $idapp = $app_pos->id;
        //Set SESSION ID for Applicant
        session()->put('idapp', $idapp);
      }


      $idapp = session('idapp');

      $id2 = Interview1::where('indice', $idapp)->take(1)->get();
      foreach ($id2 as $app_pos){
        $stage3 = $app_pos->driver;
        $stage4 = $app_pos->crim;
      }

      $id3 = InterviewApp::where('id', $idapp)->take(1)->get();
      foreach ($id3 as $app_pos){
        $stage5 = $app_pos->cv;
      }


      if($stage1 == ''){
        return redirect('/apply_online')->with('info', 'You are at Stage 1 of the application process. Please continue below....');
      } elseif (count($nicheck) > 0 && $stage2 == '') {
        return redirect('/apply_online2')->with('info', 'You are at Stage 2 of the application process. Please continue below....');
      } elseif (count($id2) > 0 && $stage3 == '') {
        return redirect('/apply_online3')->with('info', 'You are at Stage 3 of the application process. Please continue below....');
      } elseif (count($id2) > 0 && $stage4 == '') {
        return redirect('/apply_online4')->with('info', 'You are at Stage 4 of the application process. Please continue below....');
      } elseif (count($id3) == 0) {
        return redirect('/apply_online5')->with('info', 'You are at Stage 5 of the application process. Please continue below....');
      } elseif (count($id3) > 0 && $stage5 !='') {
        return redirect('/apply_online6')->with('info', 'Your application is completed! If you require more information please contact us.');
      }


    } // End of NI Check Method


    public function contact_form(Request $request){
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required',
        'tel_no' => 'required',
        'message' => 'required'
      ]);

    //Create new entry into Messages get_html_translation_table
    try{
      $chk = $request->input('name').$request->input('email').$request->input('message');

      $app = new Contact;
      $app->name = $request->input('name');
      $app->email = $request->input('email');
      $app->telephone = $request->input('tel_no');
      $app->message = $request->input('message');
      $app->lk = '';
      $app->time_now = now();
      $app->chk = $chk;
      $app->save();

    } catch (\Illuminate\Database\QueryException $e) {
        $errorCode = $e->errorInfo[1];
        if($errorCode == 1062){
            return back()->with('error', 'We have already receieved this message from you! Duplicated messages can\'t be sent...');
        }
   }

      return back()->with('success', 'Your message has been sent successfully. Thank you!');


    }



} // End of Class
