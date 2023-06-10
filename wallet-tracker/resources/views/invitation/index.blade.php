@extends('layouts.main')

@section('content-page')
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    @if (session()->has('inv_success'))
                        <div class="alert alert-success">
                            {{ session('inv_success') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-3">Invitation list</h4>
                            <p class="mb-0">
                                This page gives you information about your related invitation.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mt-3">
                    @livewire('invitation-table', ['user' => $user], key('invitation-' . $user->id))
                </div>
            </div>
            <!-- Page end  -->
        </div>
    </div>
@endsection
