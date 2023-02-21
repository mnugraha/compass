@extends('master-top')
@section('title')
    Dashboard
@endsection

@section('judul')
    <i class="fas fa-user-friends  label-icon"></i>
    Dashboard
@endsection

@section('konten-tanpa-frame')
    <!-- NEW DEPOSITS -->
    <div class="row">
        <div class="col-md-4">
            <div class="tile-basic tile-basic-icon-top">
                <div class="tile-icon">
                    <span class="icon-license"></span>
                </div>
                <div class="tile-content text-center">
                    <h3 class="tile-title">New Deposits</h3>
                    <p>Cras mattis tortor vitae pulvinar sollicitudin. Aliquam suscipit sed arcu at
                        tincidunt. Suspendisse ut massa id odio tristique placerat. Curabitur et dictum
                        elit, quis congue lacus.</p>
                    <a href="#" class="btn btn-default">Check Offers</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="tile-basic tile-basic-icon-top">
                <div class="tile-icon">
                    <span class="icon-cog"></span>
                </div>
                <div class="tile-content text-center">
                    <h3 class="tile-title">Settings</h3>
                    <p>Cras mattis tortor vitae pulvinar sollicitudin. Aliquam suscipit sed arcu at
                        tincidunt. Suspendisse ut massa id odio tristique placerat. Curabitur et dictum
                        elit, quis congue lacus.</p>
                    <a href="#" class="btn btn-default">Modify Settings</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="tile-basic tile-basic-icon-top">
                <div class="tile-icon">
                    <span class="icon-user"></span>
                </div>
                <div class="tile-content text-center">
                    <h3 class="tile-title">Your Manager</h3>
                    <p>Cras mattis tortor vitae pulvinar sollicitudin. Aliquam suscipit sed arcu at
                        tincidunt. Suspendisse ut massa id odio tristique placerat. Curabitur et dictum
                        elit, quis congue lacus.</p>
                    <a href="#" class="btn btn-default">Contact Manager</a>
                </div>
            </div>
        </div>
    </div>
    <!-- END NEW DEPOSITS -->
@endsection
@section('konten')
    <!-- DEPOSITS -->
    <div class="block block-condensed">
        <div class="app-heading app-heading-small">
            <div class="title">
                <h2>My Deposits</h2>
                <p>List of your active deposits</p>
            </div>
            <div class="heading-elements">
                <div class="input-group margin-right-5" style="width: 200px;">
                    <div class="input-group-addon">
                        <span class="fa fa-search"></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button class="btn btn-default btn-icon"><span class="icon-printer"></span></button>
            </div>
        </div>

        <div class="block-content">
            <table class="table table-bordered table-striped margin-bottom-10">
                <thead>
                    <tr>
                        <th>#</th>
                        <th style="width: 25%;">Date</th>
                        <th style="width: 35%;">Deposit</th>
                        <th>Amount</th>
                        <th style="width: 10%;">Deposit %</th>
                        <th style="width: 10%;">Charged %</th>
                        <th>Status</th>
                        <th style="width: 20%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>15.06.2017 <span class="fa fa-long-arrow-right"></span> 15.06.2017</td>
                        <td>Deposit <strong>"Universal"</strong></td>
                        <td>$14,500</td>
                        <td>5%</td>
                        <td>$650</td>
                        <td>Active</td>
                        <td>
                            <button class="btn btn-default btn-icon"><span class="icon-menu-circle"></span></button>
                            <button class="btn btn-default btn-icon"><span class="icon-question-circle"></span></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>30.08.2017 <span class="fa fa-long-arrow-right"></span> 30.08.2017</td>
                        <td>Deposit <strong>"Money Box"</strong></td>
                        <td>$550</td>
                        <td>16%</td>
                        <td>$103</td>
                        <td>Active</td>
                        <td>
                            <button class="btn btn-default btn-icon"><span class="icon-menu-circle"></span></button>
                            <button class="btn btn-default btn-icon"><span class="icon-question-circle"></span></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END DEPOSITS -->
@endsection
@section('footer')
    @TRPL-PEI
@endsection
