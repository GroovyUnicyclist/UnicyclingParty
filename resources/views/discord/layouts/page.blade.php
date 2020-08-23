@extends('discord.layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card bg-notblack text-white">
                    <div class="card-body p-5">
                        @yield('body')
                    </div>
                    <div class="card-footer">
                        <div class="row justify-content-center">
                            <form action="{{ route('send-heart') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger" style="height:100%">Send a ❤️ to the Discord Server!</button>
                            </form>
                            <a href="{{ route('discord') }}" class="btn btn-dark" style="background-color:#7289DA; border-color:#7289DA; margin-left:5px; display: inline-flex; align-items: center; ">
                                <i class="fab fa-discord fa-2x"></i><span style="margin-left:0.5rem">Join the Discord Server!</span>
                            </a>
                        </div>
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
    @yield('modals')
@endsection
