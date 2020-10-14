@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col text-center">
                            <div class="card">
                              <div class="card-header alert-primary">
                                Areas
                              </div>
                              <div class="card-body">
                                <h5 class="card-title">{{ $areas_count }}</h5>
                                <a href="{{ route('areas.index') }}" class="btn btn-primary">See the list</a>
                              </div>
                            </div>                            
                        </div>
                        <div class="col text-center">
                            <div class="card">
                              <div class="card-header alert-secondary">
                                Sellers
                              </div>
                              <div class="card-body">
                                <h5 class="card-title">{{ $sellers_count }}</h5>
                                <a href="{{ route('sellers.index') }}" class="btn btn-primary">See the list</a>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
