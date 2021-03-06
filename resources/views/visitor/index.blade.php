@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @include('components.session')
    <div class="row">
        <div class="col  p-5 mx-auto">
            <h2 class="display-5">Daily Visitor</h2>
            @include('visitor.table', ['visitors' => $visitors])
        </div>
    </div>
</div>
@endsection
