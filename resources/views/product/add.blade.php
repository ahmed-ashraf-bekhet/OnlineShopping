@extends('layouts.app')

@section('content')
<div class="login">
    <div class="main-agileits">
        <div  class="form-w3agile form1">
            <h3>Add Product</h3>
            {{ Form::open(array('route' => 'store','method' => 'POST','enctype' => 'multipart/form-data')) }}
            <div class="form-group row">
                {!! Form::label('Name', 'Name', ['class'=>'col-md-4 col-form-label text-md-right']) !!}
                <div class="col-md-8">
                    {!! Form::text('Name', '', ['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('Description', 'Description', ['class'=>'col-md-4 col-form-label text-md-right']) !!}
                <div class="col-md-8">
                    {!! Form::text('Description', '', ['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('Image', 'Add Image', ['class'=>'col-md-4 col-form-label text-md-right']) !!}
                <div class="col-md-8">
                    {!! Form::file('product_image') !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('Salary', 'Salary', ['class'=>'col-md-4 col-form-label text-md-right']) !!}
                <div class="col-md-8">
                    {!! Form::number('Salary', '', ['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('Items_Number', 'Items Number', ['class'=>'col-md-4 col-form-label text-md-right']) !!}
                <div class="col-md-8">
                    {!! Form::number('Items_Number', '', ['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>
            {!! Form::submit('submit',['class'=>'center-block']) !!}
            {{ Form::close() }}
        </div>
    </div>
</div>

@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>        
    @endforeach
@endif

@endsection