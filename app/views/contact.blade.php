@extends('layouts.master')

@section('header')
    <title>Contact Us</title>
@stop

@section('content')
    <div class="container container_about">
        <h1>Contact Us</h1>
        <h4>Send us your questions and we will reply to you ASAP or you can call us at 210-239-1278.</h4>
        
        <form method="POST" action="HomeController@submitContact">

        <!-----------------------     Users Name      ------------------------>
            <div class="form-group">
                <label for="f_name" >First Name: </label>
                <input class="form-control" id="f_name" name="f_name" type="text" placeholder="John" required>
            </div>
            <div class="form-group">
                <label for="l_name" >Last Name: </label>
                <input class="form-control"  id="l_name" name="l_name" type="text" placeholder="Smith" required>
            </div>

        <!-----------------------     Users Phone & Email     ------------------------>
            <div class="form-group">
                <label for="phone" >Phone Number: </label>
                <input class="form-control"   id="phone" name="phone" type="text" placeholder="555-867-5309" required>
            </div>
            <div class="form-group">
                <label for="email" >Email: </label>
                <input class="form-control"   id="email" name="email" type="email" placeholder="jsmith@gmail.com" required>
            </div>

        <!-----------------------     Users Comments      ------------------------>
            <div class="form-group">
                <label for="comments" >Comments: </label>
                <textarea class="form-control" id="comments" name="comments" rows="2" placeholder="I love kid-atvs.com so much...." required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@stop
