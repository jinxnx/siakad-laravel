@extends('layout.main')

@section('content')
<div class="content-wrapper" style="min-height: 2905.62px;">

    <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
    </ol>
    </div>
    </div>
    </div>
    </section>
        
    <section class="content">
       {{Auth::user()}}
       
    </section>

@endsection