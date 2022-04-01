@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5">
           <img src="https://avatars.githubusercontent.com/u/89680878?v=4" class="rounded-circle" style="max-height: 85px">
       </div>
       <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
            <h3>{{$user->username}}</h3>
            <a href="">Add New Post </a>


        </div>
        <div class="d-flex">
        <div style="padding-right: 20px"><strong>122</strong> posts</div>
        <div style="padding-right: 20px"><strong>12k</strong> followers</div>
        <div style="padding-right:20px"><strong>332</strong> following</div>
        </div>
        <div class="pt-4"><b>{{optional($user->profile)->title ??'-'}}</b> </div>
        <div>{{optional($user->profile)->description ?? '-'}}</div>
        <div><a href="#">{{optional($user->profile)->url ?? '-'}} </a></div>
       </div>
   </div>
   <div class="row pt-5">
       <div class="col-4 ">
           <img src="https://images.pexels.com/photos/9225179/pexels-photo-9225179.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="w-100 ">
       </div>
       <div class="col-4 ">
        <img src="https://images.pexels.com/photos/10831402/pexels-photo-10831402.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="w-100">
    </div>
 <div class="col-4 ">
           <img src="https://images.pexels.com/photos/9049077/pexels-photo-9049077.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="w-100">
       </div>


 
   </div>
</div>
@endsection
