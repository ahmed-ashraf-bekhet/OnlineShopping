@extends('layouts.app')

@section('content')

<div class="login">
    <div class="main-agileits">
        <div  class="form-w3agile form1">
            <h3>Edit Product</h3>
            {{ Form::open(array('route' => array('home.update','home'=>$product->id),'method' => 'POST')) }}
            <div class="form-group row">
                {!! Form::label('Name','Name', ['class'=>'col-md-4 col-form-label text-md-right']) !!}
                <div class="col-md-8">
                    {!! Form::text('Name', $product->Name, ['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('Description', 'Description', ['class'=>'col-md-4 col-form-label text-md-right']) !!}
                <div class="col-md-8">
                    {!! Form::text('Description', $product->Description, ['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('Salary', 'Salary', ['class'=>'col-md-4 col-form-label text-md-right']) !!}
                <div class="col-md-8">
                    {!! Form::number('Salary', $product->Salary, ['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>
            <div class="form-group row">
                {!! Form::label('Items_Number', 'Items Number', ['class'=>'col-md-4 col-form-label text-md-right']) !!}
                <div class="col-md-8">
                    {!! Form::number('Items_Number', $product->Num_of_Items, ['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>
            {!! Form::hidden('_method','PUT') !!}
            {!! Form::submit('submit',['class'=>'center-block']) !!}
            {{ Form::close() }}
        </div>
    </div>
</div>

@endsection