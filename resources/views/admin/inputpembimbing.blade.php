@extends('layouts.admin')

@section('content-header')

    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 style="color:#34365B; margin-left:10%;"><b> Input Data Pembimbing</b></h1>
        </div>
      </div>
    </div>

          <form class="row g-3" style="margin-left: 50px">
            <div class="col-3 mt-3">
              <div class="mt-4" style="width: 270px; margin-left:10px">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item" style="padding-left: 10%">Upload File Peserta PKL (.Excel )</li>
                  <li class="list-group-item"><button type="button" class="btn btn-secondary" style="margin-left:25%">Upload</button></li>
                </ul>
              </div>
            </div>

        </form>
    
          <button class="btn btn-success" type="button" style="margin-left:68px; width:190px; margin-top:30px;">Submit</button>
        </div>
    </div>
        

@endsection