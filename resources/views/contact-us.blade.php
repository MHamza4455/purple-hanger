@extends('layouts.dash')
@section('css')
<style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box;}
    
    input[type=text], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }
    input[type=email], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }
    input[type=submit] {
      background-color: #573ba3;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    input[type=submit]:hover {
      background-color: #45a049;
    }
    
    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }
</style>
@endsection
@section('content')
<div class="container">
  @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
    <div class="card">
        <div class= "card-body">
            <form action="{{ route('contactusdata') }}" method="post">
            @csrf
            <label for="fname">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name..">
            <label for="fname">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email.">
            <label for="country">Country</label>
            <select id="country" name="country">
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
            </select>
        
            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
        
            <input type="submit" value="Submit">
        
            </form>
        </div>
    </div>
</div>
@endsection