<!DOCTYPE html>
<html>
<head>
    <title>E Business Card</title>

    <style type="text/css">

        br {
            clear: both
        }

        input {
            border: 1px solid #000;
            margin-bottom: .5em
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .2);
            margin-left: 0;
            overflow: hidden;
            color: #fff
        }

        .location {
            color: #fff;
            padding-bottom: 10px;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, .2)
        }

        .container {
            padding: 2px 16px
        }

        /*body{padding-top:30px}*/

        small {
            display: block;
            line-height: 1.428571429;
            color: #999
        }

        body {
            font-family: Lato, "Helvetica Neue", Arial, Helvetica, sans-serif;
            font-size: 13px;
            line-height: 19.5px;
            color: #fff;
        }

        .mobile-social-share h3 {
            color: inherit;
            float: left;
            font-size: 15px;
            line-height: 20px;
            margin: 25px 25px 0 25px
        }

        .btn-group {
            display: block;
            font-size: 0;
            position: relative;
            vertical-align: middle;
            white-space: nowrap
        }

        .mobile-social-share ul {
            float: right;
            list-style: none outside none;
            margin: 0;
            min-width: 61px;
            padding: 0
        }

        .mobile-social-share li {
            display: block;
            font-size: 18px;
            list-style: none outside none;
            margin-bottom: 3px;
            margin-left: 4px;
            margin-top: 3px
        }

        #socialShare > a {
            padding: 6px 10px 6px 10px
        }

        .dropdown-menu {
            min-width: 0
        }

        .leave-top-space {
            width: 180px;
            padding-left: 10px;
        }

        .right-side-box {
            width: 300px;
        }

        .right-side-box h4 {
            font-size: 18px;
            padding: 0;
            line-height: 18px;
        }

        .person-photo {
            width: 138px;
            height: 138px;
            background: #fff;
            overflow: hidden;
            border-radius: 10px;
            display: table;
            position: relative;
            margin: 10px 0 10px 0px;
        }

        .right-card {
            width: 554px;
            height: 200px;
            display: block;
            margin: 0 auto;
        }

        .main-img {
            display: table-cell;
            vertical-align: middle;
            text-align: center;
        }

        .well-card h1 {
            text-align: center;
            margin-top: 0;
        }

        .well-sm {
            min-height: 235px;
        }

        .well {
            min-height: 20px;
            padding: 9px;
            margin-bottom: 20px;
            background-color: #f5f5f5;
            border: 1px solid #e3e3e3;
            border-radius: 3px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
        }

        .card {
            min-height: 228px;
            background: url("{{ $ebusinesscard->backgroundPath }}") no-repeat left top;

        }

        .black-bg {
            position: absolute;
            height: 100%;
            width: 100%;
            background: rgba(0, 0, 0, .5);
            display: block;
            z-index: 0;
        }

        .btn-group .dropdown-menu li {
            display: inline-block;
            margin-right: 10px;
        }

        .img-thumbnail {
            border: none;
            border-radius: 0;
            background: none;
            height: auto;
            text-align: center;
        }

        .designation-icon {
            padding-bottom: 10px;
        }

        .icon {
            height: 16px;
            margin-right: 5px;
        }

        .top-bg h2 {
            margin: 0;
        }

        .email-icon {
            line-height: 16px;
        }
    </style>
</head>
<body>
    <div class="right-card">
        <div class="well-card">
            <div class="well well-sm">
                <div class="background img-responsive card">
                    <div class="black-bg"></div>
                    <table style="position: relative; z-index: 9;">
                        <tr>
                            <td class="leave-top-space" align="top">
                                <div style="position: relative; z-index: 2;">
                                    <div class="person-photo">
                                        <div class="main-img">
                                            @if(isset($ebusinesscard) && (isset($ebusinesscard->profile) && $ebusinesscard->profile!=''))
                                                <img class="profile img-thumbnail" title="profile image"
                                                     src="{{ asset('ebcuploads/profile/'.$ebusinesscard->profile) }}"
                                                     height="150" width="150" alt="Avatar">
                                            @else
                                                <img class="profile img-thumbnail" title="profile image"
                                                     src="{{ asset('images/social/avatar.png') }}" height="150"
                                                     width="150" alt="Avatar">
                                            @endif
                                        </div>
                                    </div>
                                    @if(isset($ebusinesscard->designation) && $ebusinesscard->designation!='')
                                        <div class="designation-icon">
                                            <img class="icon" src="{{ asset('images/icon/brifcase.svg') }}" height="16">
                                            <span>{{ $ebusinesscard->designation }}</span>
                                        </div>
                                    @endif
                                    @if(isset($ebusinesscard->phone) && $ebusinesscard->phone!='')
                                        <div class="designation-icon">
                                            <img class="icon" src="{{ asset('images/icon/phone.svg') }}" height="16">
                                            <span>{{ $ebusinesscard->phone }}</span><br/>
                                        </div>
                                    @endif
                                </div>
                            </td>
                            <td class="right-side-box" align="top">
                                <h4>{{ $ebusinesscard->name }}</h4>
                                <div style="position: relative; z-index: 2;">
                                    <!-- Split button -->
                                    <small class="location">
                                        <cite title="Location">
                                            @if(isset($ebusinesscard->street) && $ebusinesscard->street!='')
                                                <span class="street-icon">{{ $ebusinesscard->street }}</span>
                                            @endif
                                            @if(isset($ebusinesscard->city) && $ebusinesscard->city!='')
                                                <span class="city-icon">{{ $ebusinesscard->city }}</span>
                                            @endif
                                            @if(isset($ebusinesscard->state) && $ebusinesscard->state!='')
                                                <span class="state-icon">{{ $ebusinesscard->state }}</span>
                                            @endif
                                            @if(isset($ebusinesscard->country) && $ebusinesscard->country!='')
                                                <span class="country-icon">{{ $ebusinesscard->country }}</span>
                                            @endif
                                            <span>{{ $ebusinesscard->pincode }}</span><img class="icon"
                                                                                           src="{{ asset('images/icon/map-icon.svg') }}"
                                                                                           height="16">
                                        </cite>
                                    </small>
                                    @if(isset($ebusinesscard->email) && $ebusinesscard->email!='')
                                        <div class="email-icon">
                                            <img class="icon" src="{{ asset('images/icon/email.svg') }}" height="16">
                                            <span>{{ $ebusinesscard->email }}</span><br/>
                                        </div>
                                    @endif
                                    @if(isset($ebusinesscard->website) && $ebusinesscard->website!='')
                                        <div class="email-icon">
                                            <img class="icon" src="{{ asset('images/icon/globe.svg') }}" height="16">
                                            <span>{{ $ebusinesscard->website }}</span><br/>
                                        </div>
                                    @endif
                                    @if(isset($ebusinesscard->skype_name) && $ebusinesscard->skype_name!='')
                                        <div class="email-icon">
                                            <img class="icon" src="{{ asset('images/icon/skype.svg') }}" height="16">
                                            <span>{{ $ebusinesscard->skype_name }}</span><br/>

                                        </div>
                                    @endif
                                    @if(isset($ebusinesscard->organisation) && $ebusinesscard->organisation!='')
                                        <div class="email-icon">
                                            <img class="icon" src="{{ asset('images/icon/gift.svg') }}" height="16">
                                            <span>{{ $ebusinesscard->organisation }}</span><br/>
                                        </div>
                                    @endif
                                    @if(isset($ebusinesscard->about) && $ebusinesscard->about!='')
                                        <div class="email-icon">
                                            </br> <img class="icon" src="{{ asset('images/icon/info.svg') }}"
                                                       height="16">
                                            <span>{{ $ebusinesscard->about }}</span>
                                        </div>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    </table>


                    <div style="clear: both;"></div>
                    <div class="btn-group">
                        <ul class="dropdown-menu" role="menu">
                            @if(isset($ebusinesscard->twitter) && $ebusinesscard->twitter!='')
                                <li><a href="{{$ebusinesscard->twitter }}" target="_blank">
                                        <img src="{{ asset('images/social/twitter.svg') }}" width="32" height="32"
                                                title="Twitter" data-alt-src="{{ asset('images/social/twitter.png') }}"></a>
                                </li>
                            @endif
                            @if(isset($ebusinesscard->facebook) && $ebusinesscard->facebook!='')
                                <li><a href="{{$ebusinesscard->facebook }}"
                                       target="_blank"><img
                                                src="{{ asset('images/social/facebook.svg') }}" width="32" height="32"
                                                title="Facebook"
                                                data-alt-src="{{ asset('images/social/facebook.png') }}"></a></li>

                            @endif
                            @if(isset($ebusinesscard->instagram) && $ebusinesscard->instagram!='')
                                <li><a href="{{$ebusinesscard->instagram }}"
                                       target="_blank"><img
                                                src="{{ asset('images/social/instagram.svg') }}" width="32" height="32"
                                                title="Instagram"
                                                data-alt-src="{{ asset('images/social/instagram.png') }}"></a>
                                </li>

                            @endif
                            @if(isset($ebusinesscard->whatsapp) && $ebusinesscard->whatsapp!='')
                                <li><a href="{{$ebusinesscard->whatsapp }}"
                                       target="_blank"><img
                                                src="{{ asset('images/social/whats-app.svg') }}" width="32" height="32"
                                                title="WhatsApp"
                                                data-alt-src="{{ asset('images/social/whats-app.png') }}"></a>
                                </li>

                            @endif
                            @if(isset($ebusinesscard->meetup) && $ebusinesscard->meetup!='')
                                <li><a href="{{$ebusinesscard->meetup }}"
                                       target="_blank"><img
                                                src="{{ asset('images/social/meetup.svg') }}" width="32" height="32"
                                                title="Meetup"
                                                data-alt-src="{{ asset('images/social/meetup.png') }}"></a>
                                </li>

                            @endif
                            @if(isset($ebusinesscard->snapchat) && $ebusinesscard->snapchat!='')
                                <li><a href="{{$ebusinesscard->snapchat }}"
                                       target="_blank"><img
                                                src="{{ asset('images/social/snapchat.svg') }}" width="32" height="32"
                                                title="Snapchat"
                                                data-alt-src="{{ asset('images/social/snapchat.png') }}"></a></li>

                            @endif
                            @if(isset($ebusinesscard->google) && $ebusinesscard->google!='')
                                <li><a  href="{{$ebusinesscard->google }}"
                                       target="_blank"><img
                                                src="{{ asset('images/social/google-plus.svg') }}" width="32"
                                                height="32"
                                                title="Google+"
                                                data-alt-src="{{ asset('images/social/google-plus.png') }}"></a>
                                </li>

                            @endif
                            @if(isset($ebusinesscard->linkedin) && $ebusinesscard->linkedin!='')
                                <li><a href="{{$ebusinesscard->linkedin }}"
                                       target="_blank"><img
                                                src="{{ asset('images/social/linked-in.svg') }}" width="32" height="32"
                                                title="LinkedIn"
                                                data-alt-src="{{ asset('images/social/linked-in.png') }}"></a>
                                </li>

                            @endif
                            @if(isset($ebusinesscard->foursquare) && $ebusinesscard->foursquare!='')
                                <li><a  href="{{$ebusinesscard->foursquare }}"
                                       target="_blank"><img
                                                src="{{ asset('images/social/foursquare.svg') }}" width="32" height="32"
                                                title="Foursquare"
                                                data-alt-src="{{ asset('images/social/foursquare.png') }}"></a></li>

                            @endif
                            @if(isset($ebusinesscard->wordpress) && $ebusinesscard->wordpress!='')
                                <li><a href="{{$ebusinesscard->wordpress }}"
                                       target="_blank"><img
                                                src="{{ asset('images/social/wordpress.svg') }}" width="32" height="32"
                                                title="Blog" data-alt-src="{{ asset('images/social/wordpress.png') }}"></a>
                                </li>

                            @endif
                            @if(isset($ebusinesscard->youtube) && $ebusinesscard->youtube!='')
                                <li><a  href="{{$ebusinesscard->youtube }}"
                                       target="_blank"><img
                                                src="{{ asset('images/social/youtube.svg') }}" width="32" height="32"
                                                title="YouTube" data-alt-src="{{ asset('images/social/youtube.png') }}"></a>
                                </li>

                            @endif
                            @if(isset($ebusinesscard->pinterest) && $ebusinesscard->pinterest!='')
                                <li><a href="{{$ebusinesscard->pinterest }}"
                                       target="_blank"><img
                                                src="{{ asset('images/social/pinterest.svg') }}" width="32" height="32"
                                                title="Pinterest"
                                                data-alt-src="{{ asset('images/social/pinterest.png') }}"></a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

