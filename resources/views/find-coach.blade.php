@extends('layouts.find-coach')

@section('content')
    <div class="container-fluid" style=" background-color: #f23d4c; height: 100%;">
        <div class="container" style="background-color: #EEE; height: 100vh; top: 5%;">
            <div class="left" style="width: 45%; float: left; font-size: 14px; height: 500px; margin: 10px">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 

                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
            <form action="/" style="border: 1px solid black; width: 50%; float: right; border-radius: 10px; margin: 10px;">
                <h1>Find Instructor</h1>
                <h4>Sytem<span>*</span></h4>

                <select>
                    <option value=""></option>
                    <option value="1">Xbox</option>
                    <option value="2">Playstation</option>
                    <option value="3">PC</option>
                    <option value="4">Switch</option>
                </select>
                <h4>Select Game<span>*</span></h4>
                <select>
                    <option value=""></option>
                    <option value="1">Rainbow Six</option>
                    <option value="2">Fortnite</option>
                    <option value="3">Apex</option>
                    <option value="4">Doom</option>
                    <option value="5">Quake</option>
                </select>
                
                <button class="btn btn-default" type="submit"  href="/">Find Instructor</button>
            </form>
        </div>
        
    </div>
@endsection