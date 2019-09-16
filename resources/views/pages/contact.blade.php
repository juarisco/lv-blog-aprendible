@extends('layout')

@section('content')
<section class="pages container">
    <div class="page page-contact">
        <h1 class="text-capitalize">contact us</h1>
        <p>Nam in maximus arcu, ac aliquam tellus. Donec vestibulum ipsum nunc, at placerat ante posuere non. Integer at dui a lacus suscipit elementum id non massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc eu neque eros. Ut eu quam justo.</p>
        <div class="divider-2" style="margin:25px 0;"></div>
        <div class="form-contact">
            <form action="#">
                <div class="input-container container-flex space-between">
                    <input type="text" placeholder="Your Name" class="input-name">
                    <input type="text" placeholder="Email" class="input-email">
                </div>
                <div class="input-container">
                    <input type="text" placeholder="Subject" class="input-subject">
                </div>
                <div class="input-container">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                </div>
                <div class="send-message">
                    <a href="#" class="text-uppercase c-green">send message</a>
                </div>
            </form>
        </div>
        
    </div>
</section>
@endsection