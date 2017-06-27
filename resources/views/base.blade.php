@extends('layout.master')
@section('body')
    <div class="section">
        <h2>Welcome</h2>
        <p>A nest of squirrels interested in everything digital from all over the globe.<br/> Some of us even further!</p>
        <p>Come talk your nuts off with us on Slack!<p>
        <br/>
        <p><a href="#contact-form" class="button">Join Now!</a></p>
        <p><a href="https://rocketsquirrel.slack.com" class="link--small">already a fellow squirrel? Sign in today!</a></p>
    </div>
    <div class="section">
        <h2>About Us!</h2>
        <p>A bunch of digitals professionals wanted a group where like minded <strike>people</strike> squirrels could chat about their passion for the digital industry, bounce ideas, ask for advice...overall try and make the web just that little more squirrable.</p>
        <p>Now with extra <b>400x</b> squirrel power, we should have something for you!</p>
    </div>
    <div class="section container">
        <h2>Channels</h2>
        <div class="row">
            <div class="col-sm">
                <h3>#_general</h3>
                <p>General chat, anything digtial.</p>
            </div>
            <div class="col-sm">
                <h3>#advice</h3>
                <p>Got a burning question? Ask it here and our smart squirrels will have a answer...if not it might not be worth knowing! </p>
            </div>
            <div class="col-sm">
                <h3>#php</h3>
                <p>PHP love!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <h3>#ruby</h3>
                <p>All things ruby</p>
            </div>
            <div class="col-sm">
                <h3>#react_dev</h3>
                <p>Let have good React-ion!</p>
            </div>
            <div class="col-sm">
                <h3>#javascript</h3>
                <p>All JS talk</p>
            </div>
        </div>
    </div>
    <div class="section">
        <h2>Join us</h2>
        <form id="contact-form" action="<?php echo $postpath; ?>" method="post">
        <p>Why not join us? Just simply fill the form out below!</p>
        <p>My
            <label for="name">name</label> is
            <input type="text" name="name" id="name" minlength="3" placeholder="(your name here)" required> and</p>

        <p>my
            <label for="email">email address</label> is
            <input type="email" name="email" id="email" placeholder="(your email address)" required>
        </p>

        <p> and here is a little
            <label for="comment">bit of information</label> about myself,</p>

        <p>
            <textarea name="comment" id="comment" placeholder="(your description here)" class="expanding" required></textarea>
            <input type="text" name="messages" style="display:none"/>

        </p>
        <p>
            <button type="submit">
            Send
            </button>
        </p>
        </form>
    </div>
@endsection
