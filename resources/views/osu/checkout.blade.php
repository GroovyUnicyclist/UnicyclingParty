@extends('osu.layouts.page')

@section('body')
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Description</th>
                <th>In use?</th>
                @can('assign unis')
                <th>Used By</th>
                <th>Last Checked Out At</th>
                <th>Last Returned At</th>
                @endcan
            </tr>
        </thead>
        <tbody>
            @foreach($unis as $uni)
                <tr>
                    <td>{{ $uni->uni_id }}</td>
                    <td>{{ $uni->description }}</td>
                    <td>{{ $uni->in_use }}</td>
                    @can('assign unis')
                    <td>{{ $uni->last_used_by }}</td>
                    <td>{{ $uni->last_checked_out_at }}</td>
                    <td>{{ $uni->last_returned_at }}</td>
                    @endcan
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection