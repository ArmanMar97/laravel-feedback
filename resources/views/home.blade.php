@extends('layout')
<title>Home</title>
@section('content')
    <section id="contact" class="contact">
        <div class="container mt-5" data-aos="fade-up">
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12">
                    <form action="" method="post" role="form" class="php-email-form">
                        <div class="form-row">
                            <div class="col form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="dataTable">
        <div class="container" data-aos="fade-up">
            <div class="info-box-wrapper">
                <div class="row p-4">
                    <div class="col-12 text-center pb-3">
                        <div class="info-box p-2">
                            <h4>User ID</h4>
                            <p>1</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 text-center">
                        <div class="info-box p-2">
                            <h4>Name</h4>
                            <p>Arman Margaryan</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 text-center">
                        <div class="info-box p-2">
                            <h4>Email</h4>
                            <p>margaryanarman40@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 text-center">
                        <div class="info-box p-2">
                            <h4>Created At</h4>
                            <p>11-25-2020</p>
                        </div>
                    </div>
                    <div class="col-12 text-center mt-4">
                        <div class="info-box p-3">
                            <h4>Message</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
