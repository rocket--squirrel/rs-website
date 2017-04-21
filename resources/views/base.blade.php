@extends('layout.master')
@section('body')
    <img src="/images/logo.png" width="300px"/>
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
@endsection
