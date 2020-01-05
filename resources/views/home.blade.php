@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
               <img src="https://lumidee.com/wp-content/uploads/2016/08/global-conference-call.png" class="w-50 p-3">
        </div>
        <div class="col-9 pt-3">
            <div><h1>{{Auth::user()->username}}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>121</strong> following</div>
            </div>
            
            <div class="pt-4 font-weight-bold">
                freeCodeCamp.org
            </div>
            
            <div>
                We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.
            </div>
            
            <div>
                <a href="www.freecodecamp.org">www.freecodecamp.org</a>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://scontent-yyz1-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c0.1.743.743a/s640x640/79013780_988511461518028_6762939584770433774_n.jpg?_nc_ht=scontent-yyz1-1.cdninstagram.com&_nc_cat=104&_nc_ohc=LFR9kYIbaNQAX-RSAL6&oh=04c55eb5e40ff2a4485363525bb7ce2a&oe=5EABFE60" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-yyz1-1.cdninstagram.com/v/t51.2885-15/e35/c94.0.561.561a/79225007_186012015855932_2310000774829668783_n.jpg?_nc_ht=scontent-yyz1-1.cdninstagram.com&_nc_cat=108&_nc_ohc=-_7ORuSRwzIAX8xRvwO&oh=52e562341c628a4bf2d202e8873129be&oe=5EB49066" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-yyz1-1.cdninstagram.com/v/t51.2885-15/e35/c92.0.496.496a/76876296_2463502693772064_5406679365456228022_n.jpg?_nc_ht=scontent-yyz1-1.cdninstagram.com&_nc_cat=100&_nc_ohc=dhoW-So00_AAX9UYwEs&oh=f4c2591d4ae785977bbfb9a363cc9e13&oe=5EA9D160" class="w-100">
        </div>
    </div>
</div>
@endsection
