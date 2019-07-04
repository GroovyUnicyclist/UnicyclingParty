@extends('main.layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body p-5">
                        @yield('body')
                    </div>
                    <div class="card-footer">
                        {{-- <div class="row justify-content-center">
                            <img src="/images/Unicycle_Club_Logo_Official_Square.png" style="height:100px;" alt="Logo">
                        </div>
                        <div class="row justify-content-center">
                            <ul>
                                <li>
                                    <a href=https://activities.osu.edu/involvement/student_organizations/find_a_student_org?i=309b4a22-a2e1-4838-9c11-c0da3bf12d8a&l=U&c=Columbus&page=2"">Unicycle Club at OSU Directory Page</a>
                                </li>
                                <li>
                                    <a href="https://activities.osu.edu/involvement/student_organizations/find_a_student_org/">OSU Student Organization Directory</a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection