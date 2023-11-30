@extends('layouts.app')

@section('content')
    <div class="container mt-5">
    <div class="row">
        <div class="col text-center">
            <a href="{{ route('enquiries.create') }}" class="btn btn-primary py-2 px-3 text-white">Post a New Enquiry</a>
        </div>
    </div>

     <div class="row text-center mt-3 d-flex justify-content-center">
         <div class="col-9">
             <h3> All Enquiries </h3>
             <div class="accordion" id="accordionExample">
                 @foreach($enquiries as $enquiry)
                     <div class="accordion-item">
                         <h2 class="accordion-header" id="headingOne">
                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 <div>
                                     <strong>Subject: </strong>
                                     {{ $enquiry->subject }}
                                 </div>
                             </button>
                         </h2>
                         <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                             <div class="accordion-body text-start">
                                 <div>
                                     <strong>Description: </strong>
                                     {{ $enquiry->description }}
                                 </div>
                                 <div>
                                     <strong>Status: </strong>
                                     {{ $enquiry->status }}
                                 </div>
                             </div>
                         </div>
                     </div>
                 @endforeach
             </div>
         </div>
    </div>
    </div>
@endsection
