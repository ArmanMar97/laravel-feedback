@extends('layouts.app')
<title>Feedback {{$item->id}}</title>
@section('content')
    <section id="dataTable">
        <div class="container" data-aos="fade-up">
            <div class="info-box-wrapper">
                <div class="row p-4">
                    <div class="col-12 text-center pb-3">
                        <div class="info-box p-2">
                            <h4>User ID</h4>
                            <p>{{$item->id}}</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 text-center">
                        <div class="info-box p-2">
                            <h4>Name</h4>
                            <p>{{$item->name}}</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 text-center">
                        <div class="info-box p-2">
                            <h4>Email</h4>
                            <p>{{$item->email}}</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 text-center">
                        <div class="info-box p-2">
                            <h4>Created At</h4>
                            <p>{{$item->created_at}}</p>
                        </div>
                    </div>
                    <div class="col-12 text-center mt-4">
                        <div class="info-box p-3">
                            <h4>Message</h4>
                            <p>{{$item->message}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-100 text-center pt-2 back-arrow">
                <form method="post" action="{{$item->id}}">
                    @csrf
                    <button class="border-0 back delete-btn" type="submit"><i class="fas fa-2x fa-trash"></i></button>
                </form>
            </div>
            <div onclick="document.location = '/dashboard'" class="w-100 text-center pt-2 back-arrow">
                <i class="fas fa-4x fa-long-arrow-alt-left"></i>
            </div>
        </div>
    </section>
@endsection
