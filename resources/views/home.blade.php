@extends('layouts.app')
<title>Home</title>
@section('content')
    <section id="contact" class="contact">
        <div class="container mt-2" data-aos="fade-up">
            <h3 class="text-center">Leave your message</h3>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12">
                    <form action="/" method="post" role="form" class="php-email-form">
                        @csrf
                        <div class="form-row">
                            <div class="col form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" value="{{old('name')}}"/>
                                @if($errors->has('name'))
                                    <p class="alert-danger">{{$errors->first('name')}}</p>
                                @endif
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value="{{old('email')}}" />
                                @if($errors->has('email'))
                                    <p class="alert-danger">{{$errors->first('email')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" >{{old('message')}}</textarea>
                            @if($errors->has('message'))
                                <p class="alert-danger">{{$errors->first('message')}}</p>
                            @endif
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                        @if(session('message'))
                            <h3 class="text-center mt-4">{{session('message')}}</h3>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
