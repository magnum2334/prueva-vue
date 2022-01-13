@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header my-2">{{ __('Dashboard') }}</div>  
                <div class="card-body">
                    <div class="d-flex justify-content-center ">
                        <router-link class="btn btn-primary" to ="Example">Go to Example</router-link>
                        <router-link class="btn btn-secondary mx-2" to ="Hero">Go to heroes</router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
