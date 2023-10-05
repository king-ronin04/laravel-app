@extends('layout')

@section('contact')
            <form class="container" style="margin-top: 30px;"  method="POST" action="{{ route('contact.submit') }}">
                @csrf
                <p class= "h4 mb-4">Contact us</p>

                <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">
                
                <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">

                <label>Subject</label>
                <select class="browser-default custom-select mb-4">
                    <option value="" disabled>Choose option</option>
                    <option value="1" selected>Feedback</option>
                    <option value="2">Report a bug</option>
                    <option value="3">Feature request</option>
                    <option value="4">Feature request</option>
                </select>

                <div class="form-group">
                    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
                </div>

                <div class="custom-control custom-checkbox mb-4">
                    <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
                    <label class="custom-control-label" for="defaultContactFormCopy">Send me a copy of this message</label>
                </div>

                <button class="btn btn-info btn-block" type="submit">Send</button>

            </form>
<style>
    .container{
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);   
    }
</style>
@endsection
