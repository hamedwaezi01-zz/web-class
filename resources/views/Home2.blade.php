@extends('layouts.main_layout')

@section('head')
    <script>
        /*  */
        $(document).on("click", "#saveContact", function (e) { // Ajax is asynchronous, the success or the error function will be called when the server answers the client
            //#save is the submit input, #myform is the id of the form,
            e.preventDefault(); // Prevent Default form Submission

            $.ajax({
                type: "post",
                url: '/contact',
                data: $("#contactForm").serialize(),
                success: function (store) {

                    $('#saveContact').prop('disabled', true);
                    var successmessage = '<div class="alert alert-success"> ' +
                        '<div class="row">' +
                        '<div class="col-auto align-self-start">' +
                        ' </div>' +
                        '<div class="col">' + '<p>' + ' <span class="fas fa-check"></span> We have received your message, and will soon contact you via email!'
                        + '</p>'
                        + '</div>' + '</div>' + '</div>';
                    $("#contactResults").html(successmessage);
                },
                error: function (data) {
                    console.log(data);
                }
            });

        });
    </script>
@stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-wrap">
                    <div class="page-title-inner">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="bread"><a href="contact.html#">Home</a> &rsaquo; Contact</div>
                                <div class="bigtitle">Contact</div>
                            </div>
                            <div class="col-md-3 col-md-offset-5">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="title-bg">
            <div class="title">Contact</div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <p class="page-content">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    indusy standard dummy text ever since the 1500s.
                </p>
                <ul class="contact-widget">
                    <li class="fphone">+387 123 456, +387 123 456 <br/> +387 123 456</li>
                    <li class="fmobile">+387-123-456-1<br/>+387-123-456-2</li>
                    <li class="fmail lastone">your@email.com<br/>customer.care@mail.com</li>
                </ul>
            </div>
            <div class="col-md-7 col-md-offset-1">
                <div class="loc">
                    <div id="map_canvas"></div>
                </div>
            </div>
        </div>

        <div class="title-bg">
            <div class="title">Quick Contact</div>
        </div>

        <div class="qc">
            <form method="POST" action="" id="contactForm">
                @csrf
                <div class="form-group">
                    <label for="name">Name<span>*</span></label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="form-group">
                    <label for="email">Email<span>*</span></label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="text">Messages<span>*</span></label>
                    <textarea class="form-control" id="text" name="message"></textarea>
                </div>
                <button type="submit" class="btn btn-default btn-red btn-sm" id="saveContact">Submit</button>
            </form>
            <div class="spacer"></div>
            <div id="contactResults">
            </div>

        </div>
        <div class="spacer"></div>

    </div>

@stop
