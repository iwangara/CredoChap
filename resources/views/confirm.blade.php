@extends('layouts.customer', ['class' => 'profile-page sidebar-collapse'])

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('material') }}/img/confirm.svg');"></div>
<div class="main main-raised">
    <div class="profile-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                    <div class="profile">
                        <div class="avatar">
                            <img src="{{ asset('material') }}/img/confirmed.svg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                        </div>
                        <div class="name">
                            <h3 class="title">Confirm transaction details</h3>
                            <h6>Hey,<br>You have requested to buy airtime worth: <span style="color: red;">1000 KES</span></h6>
                            <h6>The number to be topped up is: <span style="color: red;">732992982</span></h6>
                            <h6>The number to send Mpesa is: <span style="color: red;">729790289</span></h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="#buy"  class="btn btn-warning btn-raised btn-round">

                                        Yes,Proceed<i class="material-icons">play_arrow</i>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="#buy"  class="btn btn-outline-primary btn-raised btn-round">

                                        <i class="material-icons">fast_rewind</i>No,Make Changes
                                    </a>
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
