<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BatchController extends Controller
{
    
          //save to database
          public function saveBatch(Request $data){
            $batch = DB::table('batches')->where('batch_no',$data->batch_no)->first();
          
            if($batch) return view('/error',["err" => "Sorry! The batch number is already in use."]);
            $batch = new Batch();
            $batch->batch_no = $data->batch_no;
            $batch->quantity = $data->quantity;
            $batch->status = $data->status;
            $batch->remarks = $data->remarks;
            $batch->save();
            return redirect('/view');
        }

        //view Batch
        public function viewBatch(){
            return view('/view',['list' => Batch::all()]);
        }

        public function deleteBatch($id){
            $batch = Batch::find($id);
            $batch->delete();
            return redirect('/view');
        }

        public function searchByDate(Request $data){
            $date =  $data->date;
             $results = DB::table('batches')->whereDate('created_at','>=',$date)->get();
             return view('/view',["list" => $results]);
        }
}