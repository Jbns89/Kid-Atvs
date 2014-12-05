@extends('layouts.master')

@section('header')
    <title>Contact Us</title>
@stop

@section('content')
    <div class="container">
        <h1>Contact Us</h1>
        
        <form method="POST" action="#">
    <!-----------------------     Users Name      ------------------------>
            <label for="f_name" >First Name: </label>
            <input id="f_name" name="f_name" type="text" placeholder="John" required>

            <label for="l_name" >Last Name: </label>
            <input id="l_name" name="l_name" type="text" placeholder="Smith" required>


    <!-----------------------     Users Address      ------------------------>
            <label for="address1" >Address Street: </label>
            <input  id="address1" name="address1" type="text" placeholder="123 Main Street" required>
            <label for="address_apt" >Apt Number: </label>
            <input  id="address_apt" name="address_apt" type="text" placeholder="Apt 321">
            <label for="city" >City: </label>
            <input  id="city" name="city" type="text" placeholder="San Antonio" required>
            <!--------- State Dropdown ------------>
            <select name="state">
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
            </select>
            <!----------    Users Zipcode      ------------------------>
            <label for="zipcode" >Zipcode: </label>
            <input  id="zipcode" name="zipcode" type="text" placeholder="78221" required>


    <!-----------------------     Users Phone & Email     ------------------------>
            <label for="phone" >Phone Number: </label>
            <input  id="phone" name="phone" type="text" placeholder="867-5309" required>

            <label for="email" >Email: </label>
            <input  id="email" name="email" type="email" placeholder="jsmith@gmail.com" required>

    <!-----------------------     Users Comments      ------------------------>
            <label for="comments" >Comments: </label>
            <textarea  id="comments" name="comments" rows="4" placeholder="I love kid-atvs.com so much...." required></textarea>
        </form>
    </div>
@stop
