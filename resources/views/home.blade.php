@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var token = {!! json_encode($token) !!};;
    fetch('http://localhost:8000/api/posts',{
        method:'GET',
        headers:{
            'Content-Type':'application/json',
            'Authorization':'Bearer ' + token
        }
    }).then(res=>res.json()).then(posts=>console.log(posts));
</script>
