<!DOCTYPE html>
<html>
<head>
    <title>E Business Card</title>
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/additional-methods.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            margin-left:0;
            position:relative;
            overflow: hidden;
            color: white;
        }
        .location{
            color: white;
        }
        .card::before{
            content: '';
            position: absolute;
            height: 100%;
            width: 100%;
            background: rgba(0,0,0,0.5);
            display: block;
        }
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .container {
            padding: 2px 16px;
        }
        body{padding-top:30px;}

        .glyphicon {  margin-bottom: 10px;margin-right: 10px;}

        small {
            display: block;
            line-height: 1.428571429;
            color: #999;

        }

        body {
            /*color: #777777;*/
            font-family: "Lato","Helvetica Neue","Arial","Helvetica",sans-serif;
            font-size: 13px;
            line-height: 19.5px;
        }


        .mobile-social-share h3 {
            color: inherit;
            float: left;
            font-size: 15px;
            line-height: 20px;
            margin: 25px 25px 0 25px;
        }

        .btn-group {
            display: inline-block;
            font-size: 0;
            position: relative;
            vertical-align: middle;
            white-space: nowrap;
        }

        .mobile-social-share ul {
            float: right;
            list-style: none outside none;
            margin: 0;
            min-width: 61px;
            padding: 0;
        }


        .mobile-social-share li {
            display: block;
            font-size: 18px;
            list-style: none outside none;
            margin-bottom: 3px;
            margin-left: 4px;
            margin-top: 3px;
        }

        .caret {
            border-left: 4px solid rgba(0, 0, 0, 0);
            border-right: 4px solid rgba(0, 0, 0, 0);
            border-top: 4px solid;
            display: inline-block;
            height: 0;
            margin-left: 2px;
            vertical-align: middle;
            width: 0;
        }

        #socialShare > a{
            padding: 6px 10px 6px 10px;
        }

        @media (max-width : 320px) {
            .mobile-social-share h3 {
                margin-left: 0;
                margin-right: 0;
            }
            .mobile-social-share h3 {
                font-size: 15px;
            }
        }

        @media (max-width : 238px) {
            .mobile-social-share h3 {
                font-size: 12px;
            }
        }
        .dropdown-menu{
            min-width:0;
        }
        .leave-top-space {
            padding-top:6px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Genrater Preview!</h1>
    <div class="row">
    <div class="col-sm-6">
        <div class="container">
            <div class="row ">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="well well-sm">
                        <div class="row background img-responsive card text-white bg-info mb mb-3">
                            <div class="col-sm-6 col-md-4 leave-top-space">
                                @if(isset($ebusinesscard) && (isset($ebusinesscard->profile) && $ebusinesscard->profile!=''))
                                    <img class="profile img-thumbnail" title="profile image" data-toggle="tooltip" src="{{ asset('ebcuploads/profile/'.$ebusinesscard->profile) }}" height="200" alt="Avatar">
                                @else
                                    <img class="profile img-thumbnail" title="profile image" data-toggle="tooltip" src="{{ asset('ebcuploads/img_avatar.png') }}" height="200" alt="Avatar">
                                @endif
                                <div class="designation-icon"><i class="glyphicon glyphicon-briefcase" title="designation" data-toggle="tooltip"></i><span id='designation'></span></div>
                                <div class="designation-icon"><i class="glyphicon glyphicon-gift organisation-icon" title="organisation" data-toggle="tooltip"></i><span id='organisation'></span></div>
                            </div>
                            <div class="col-sm-6 col-md-8 leave-top-space" >

                                <!-- Split button -->
                                <div class="btn-group pull-right">
                                    <button type="button" title="Social Shere" data-toggle="tooltip" class="btn btn-primary">
                                        <i class="fa fa-share-alt fa-inverse"></i></button>
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span><span class="sr-only">Social</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#" class="twitter social"  href="" target="_blank"><img src="{{ asset('ebcuploads/social') }}/twitter.svg" width="32" height="32"  title="Twitter" data-alt-src="{{ asset('ebcuploads/social') }}/twitter.png"></a></li>
                                        <li><a href="#" class="facebook social"  href="" target="_blank"><img src="{{ asset('ebcuploads/social') }}/facebook.svg" width="32" height="32"  title="Facebook" data-alt-src="{{ asset('ebcuploads/social') }}/facebook.png"></a></li>
                                        <li><a href="#" class="instagram social"  href="" target="_blank"><img src="{{ asset('ebcuploads/social') }}/instagram.svg" width="32" height="32"  title="Instagram" data-alt-src="{{ asset('ebcuploads/social') }}/instagram.png"></a></li>
                                        <li><a href="#" class="whatsapp social"  href="" target="_blank"><img src="{{ asset('ebcuploads/social') }}/whats-app.svg" width="32" height="32" title="WhatsApp" data-alt-src="{{ asset('ebcuploads/social') }}/whats-app.png"></a></li>
                                        <li><a href="#" class="meetup social"  href="" target="_blank"><img src="{{ asset('ebcuploads/social') }}/meetup.svg" width="32" height="32"  title="Meetup" data-alt-src="{{ asset('ebcuploads/social') }}/meetup.png"></a></li>
                                        <li><a href="#" class="snapchat social"  href="" target="_blank"><img src="{{ asset('ebcuploads/social') }}/snapchat.svg" width="32" height="32"  title="Snapchat" data-alt-src="{{ asset('ebcuploads/social') }}/snapchat.png"></a></li>
                                        <li><a href="#" class="google social" href="" target="_blank"><img src="{{ asset('ebcuploads/social') }}/google-plus.svg" width="32" height="32"   title="Google+" data-alt-src="{{ asset('ebcuploads/social') }}/google-plus.png"></a></li>
                                        <li><a href="#" class="linkedin social" href="" target="_blank"><img src="{{ asset('ebcuploads/social') }}/linked-in.svg" width="32" height="32"   title="LinkedIn" data-alt-src="{{ asset('ebcuploads/social') }}/linked-in.png"></a></li>
                                        <li><a href="#" class="foursquare social"  href="" target="_blank"><img src="{{ asset('ebcuploads/social') }}/foursquare.svg" width="32" height="32"  title="Foursquare" data-alt-src="{{ asset('ebcuploads/social') }}/foursquare.png"></a></li>
                                        <li><a href="#" class="wordpress social"  href="" target="_blank"><img src="{{ asset('ebcuploads/social') }}/wordpress.svg" width="32" height="32"  title="Blog" data-alt-src="{{ asset('ebcuploads/social') }}/wordpress.png"></a></li>
                                        <li><a href="#" class="youtube social"  href="" target="_blank"><img src="{{ asset('ebcuploads/social') }}/youtube.svg" width="32" height="32"  title="YouTube" data-alt-src="{{ asset('ebcuploads/social') }}/youtube.png"></a></li>
                                        <li><a href="#" class="pinterest social"  href="" target="_blank"><img src="{{ asset('ebcuploads/social') }}/pinterest.svg" width="32" height="32"  title="Pinterest" data-alt-src="{{ asset('ebcuploads/social') }}/pinterest.png"></a></li>
                                    </ul>
                                </div>
                                <h4 id='name'></h4>
                                <small class="location"><cite data-toggle="tooltip" title="Location">
                                        <span id='street' class="street-icon"></span>
                                        <span id='city' class="city-icon"> </span>
                                        <span id='state' class="state-icon"></span>
                                        <span id='country' class="country-icon"> </span>
                                        <span id='zipcode'></span><i class="glyphicon glyphicon-map-marker zipcode-icon"></i>
                                    </cite></small>
                                <p>
                                    <div class="email-icon"><i class="glyphicon glyphicon-envelope" data-icon="email" title="email" data-toggle="tooltip"></i><span id="email"></span><br /></div>
                                    <div class="website-icon"><i class="glyphicon glyphicon-globe"  data-icon="website" title="website" data-toggle="tooltip"></i><a class="website"><span id="website"></span> </a><br /></div>
                                    <div class="skype_name-icon"><i class="glyphicon glyphicon-comment" data-icon="skype_name" title="skype name" data-toggle="tooltip"></i><span id='skype_name'></span><br/></div>
                                    <div class="phone-icon"><i class="glyphicon glyphicon-phone" data-icon="phone" title="phone" data-toggle="tooltip"></i><span id='phone'></span><br/></div>
                                    <div class="about-icon"><i class="glyphicon glyphicon-info-sign" data-icon="about" title="about" data-toggle="tooltip"></i><span id='about'></span></div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <h3>Add New E Business Card : </h3>
        @if(isset($ebusinesscard) && $ebusinesscard!='')
            {{ Form::model($ebusinesscard, ['route' => ['ebusinesscard.update', $ebusinesscard->id], 'method' => 'patch','id'=>'ecardformID','enctype'=>"multipart/form-data"]) }}
        @else
            {!! Form::open(['route' => 'ebusinesscard.store','id'=>'ecardformID','enctype'=>"multipart/form-data"]) !!}
        @endif

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group"><b><h4>Genral Information</h4></b></div>
                <div class="form-group">
                    {!! Form::text('name',null,['class' => 'form-control','placeholder'=>'Input Your name','required'=>'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('designation',null,['class' => 'form-control','placeholder'=>'Input Your designation','required'=>'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('organisation',null,['class' => 'form-control','placeholder'=>'Input Your organisation']) !!}
                </div>
                <div class="form-group">
                    {!! Form::email('email',null,['class' => 'form-control','placeholder'=>'Input Your email','required'=>'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('phone',null,['class' => 'form-control','placeholder'=>'Input Your phone','required'=>'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('fax',null,['class' => 'form-control','placeholder'=>'Input Your fax']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('skype_name',null,['class' => 'form-control','placeholder'=>'Input Your skype_name']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('website',null,['class' => 'form-control','placeholder'=>'Input Your website','required'=>'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('street',null,['class' => 'form-control','placeholder'=>'Input Your street','required'=>'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('city',null,['class' => 'form-control','placeholder'=>'Input Your city','required'=>'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('state',null,['class' => 'form-control','placeholder'=>'Input Your state','required'=>'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('country',null,['class' => 'form-control','placeholder'=>'Input Your country','required'=>'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('zipcode',null,['class' => 'form-control','placeholder'=>'Input Your zipcode','required'=>'required']) !!}
                </div>
            </div>


            <div class="col-sm-6">
                <div class="form-group"><b><h4>Social Information</h4></b></div>
                <div class="form-group">
                    {!! Form::text('whatsapp',null,['class' => 'form-control','placeholder'=>'Input Your whatsapp']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('linkedin',null,['class' => 'form-control','placeholder'=>'Input Your linkedin']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('instagram',null,['class' => 'form-control','placeholder'=>'Input Your instagram']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('snapchat',null,['class' => 'form-control','placeholder'=>'Input Your snapchat']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('facebook',null,['class' => 'form-control','placeholder'=>'Input Your facebook']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('google',null,['class' => 'form-control','placeholder'=>'Input Your google']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('twitter',null,['class' => 'form-control','placeholder'=>'Input Your twitter']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('foursquare',null,['class' => 'form-control','placeholder'=>'Input Your foursquare']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('youtube',null,['class' => 'form-control','placeholder'=>'Input Your youTube']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('blog',null,['class' => 'form-control','placeholder'=>'Input Your blog']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('meetup',null,['class' => 'form-control','placeholder'=>'Input Your meetup']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('pinterest',null,['class' => 'form-control','placeholder'=>'Input Your pinterest']) !!}
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group"><b><h4>About us Information</h4></b></div>
                <div class="form-group">
                    {!! Form::textarea('about',null,['class' => 'form-control','placeholder'=>'Input Your about','rows'=>2]) !!}
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group"><b><h4>Images</h4></b></div>
            <div class="col-sm-6">
                <label for="profile">Profile </label>
                <div class="form-group">
                    {!! Form::file('profile',['class' => 'form-control','placeholder'=>'Input Your profile','id'=>'imagesUpload']) !!}
                </div>
            </div>
            <div class="col-sm-6">
                <label for="background">Background </label>
                <div class="form-group">
                    {!! Form::file('background',['class' => 'form-control','placeholder'=>'Input Your background']) !!}
                </div>
            </div>
            {{--<div class="col-sm-6">--}}
                {{--<label for="logo">Logo </label>--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form::file('logo',['class' => 'form-control','placeholder'=>'Input Your logo']) !!}--}}
                {{--</div>--}}
            {{--</div>--}}
            </div>
            <div class="col-sm-12" >
                <div class="form-group ">
                    {!! Form::submit($submit, ['class' => 'btn btn-primary btn-lg']) !!}
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
</div>

<script>
    $('.social').hide();
    $("form#ecardformID :input").on("change",function(e){
        // console.log(e.target.name);
        var inputName = e.target.name;
        var inputVal = e.target.value;
        if(e.target.value.length > 0){
            $("#" + inputName).show().empty().append(inputVal);
            $("." + inputName).show();
            $('.'+inputName+'-icon').show();
            $("." + inputName).attr("href",'');
            $("." + inputName).attr("href", inputVal)
        } else {
            $("#" + inputName).hide();
            $("." + inputName).hide();
            $('.'+inputName+'-icon').hide();
        }
    });
    $('.email-icon,.website-icon,.skype_name-icon,.phone-icon,.about-icon,.organisation-icon,.designation-icon,.zipcode-icon').hide();
    $('input[type="file"]').change(function(e) {
        readURL(this,e);
    });
    function readURL(input,e) {
        if (input.files && input.files[0]) {
            var fileName = e.target.name;
            var reader = new FileReader();
            reader.onload = function(e) {
                $('.'+fileName).attr('src', e.target.result);
                $('.'+fileName).css({'background-image':'url(' + e.target.result + ')','background-size':'100% 100%'});
            }
            reader.readAsDataURL(input.files[0]);
        }

    }
</script>
@if(isset($ebusinesscard) && $ebusinesscard!='')
    @foreach(array_keys($ebusinesscard->toArray()) as $value)
        @if($value)
            <script>
                var inputName = '{{ $value }}';
                var inputVal = '{{ $ebusinesscard->$value }}';
                $("#" + inputName).show().empty().append(inputVal);
                $("." + inputName).show();
                $('.'+inputName+'-icon').show();
                $("." + inputName).attr("href",'');
                $("." + inputName).attr("href", inputVal)
            </script>
        @endif
    @endforeach
@endif
<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
        $('#ecardformID').validate({ // initialize the plugin
            rules: {
                email: {
                    required: true,
                    email: true
                },
            },
            submitHandler: function (form) { // for demo
                alert('valid form submitted'); // for demo
                return false; // for demo
            }
        });

    });
</script>
@if(isset($ebusinesscard) && (isset($ebusinesscard->background) && $ebusinesscard->background!=''))
    <script>
        $('.background').css({'background-image':'url({{ asset('ebcuploads/background/'.$ebusinesscard->background) }})','background-size':'100% 100%'});
    </script>
@else
    <script>
        $('.background').css({'background-image':'url({{ asset('ebcuploads/3630098836.jpeg') }})','background-size':'100% 100%'});
    </script>
@endif
</body>
</html>

