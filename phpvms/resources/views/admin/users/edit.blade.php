@extends('admin.app')
@section('title', 'Edit '. $user->name)
@section('content')
  <div class="card border-blue-bottom">
    <div class="content">
      {{ Form::model($user, ['route' => ['admin.users.update', $user->id], 'method' => 'patch']) }}
      @include('admin.users.fields')
      {{ Form::close() }}
    </div>
  </div>

  <div class="card border-blue-bottom">
    <div class="content">
      <div class="header">
        <h3>PIREPs</h3>
      </div>

      @include('admin.pireps.table')

      <div class="row">
        <div class="col-12 text-center">
          {{ $pireps->links('admin.pagination.default') }}
        </div>
      </div>
    </div>
  </div>
@endsection
