@extends('main') 
@section('content')
<div class="container mt-5">
     @include('alert') 
 <div class="card shadow-lg border-0 mb-5"  style="background-color:#F7F2E8;"> 
    <div class="card-header text-center"
             style="background-color:#8B6B3E; color:white;">
            <h4>Envoyer un email</h4>
        </div>
    <div class="container justify-content-center mt-3"> 
   
    </div> 
    
    <div class="container"> 
        <div class="row justify-content-center"> 
            <form action="{{ route('send.email') }}" method="post"> 
                @csrf 
    
                <div class="form-group"> 
                    <label for="recipient_email">Recipient Email:</label> 
                    <input type="email" class="form-control" name="recipient_email" required> 
                </div> 
    
                <div class="form-group"> 
                    <label for="subject">Subject:</label> 
                    <input type="text" class="form-control" name="subject" required> 
                </div> 
    
                <div class="form-group"> 
                    <label for="message">Message:</label> 
                    <textarea class="form-control" name="message" rows="5" required></textarea> 
                </div> 
                <div class="text-center">
                    <button type="submit" class="btn mt-3 mb-3" style="background-color:#D4AF37; color:white;">Send Email</button> 
                    <a href="{{ url()->previous() }}" class="btn btn-outline-secondary ms-2">Annuler</a>
                </div>
                
            </form> 
        </div> 
    </div> 
</div>
</div>
@endsection 