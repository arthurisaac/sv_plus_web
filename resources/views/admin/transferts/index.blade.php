@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="container">
                <div class="card">
                    <div class="card-header">{{ __('Transferts') }}</div>


                    <div class="container mt-5">
                        <a href="" class="btn btn-primary">Ajouter +</a>
                        <table class="table table-responsive table-bordered">
                            <thead>
                            <tr>
                                <td>#</td>
                                <td>Titre</td>
                                <td>Image</td>
                                <td>Date</td>
                                <td></td>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection
