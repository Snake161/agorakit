<div class="form-group">
    {!! Form::label('name', trans('messages.name')) !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
</div>


<div class="form-group">
    {!! Form::label('email', trans('messages.email')) !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', trans('messages.description')) !!}
    {!! Form::textarea('body', null, ['id' => 'wysiwyg', 'class' => 'form-control', 'required']) !!}
</div>


<div class="form-group">
    {!! Form::label('cover', trans('messages.photo')) !!}
    {!! Form::file('cover', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('address', trans('messages.address') . ':') !!}
    <div class="alert alert-info">
        {{trans('messages.address_privacy_and_help')}}
    </div>
    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
</div>

@if (Auth::user()->isAdmin())
    <div class="form-group">
        {{Form::radio('is_admin', 'yes', $user->isAdmin())}} {{trans('messages.admin')}} <br/>
        {{Form::radio('is_admin', 'no', !$user->isAdmin())}} {{trans('messages.not_an_admin')}} <br/>
    </div>
@endif


@include('partials.wysiwyg')
