@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Listing {{ $listing->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/listings') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/listings/' . $listing->id . '/edit') }}" title="Edit Listing"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/listings' . '/' . $listing->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Listing" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $listing->id }}</td>
                                    </tr>
                                    <tr><th> TitleEng </th><td> {{ $listing->titleeng }} </td></tr>
                                    <tr><th> Title </th><td> {{ $listing->title }} </td></tr>
                                    <tr><th> Content </th><td> {{ $listing->content }} </td></tr>
                                    <tr><th> Url1 </th><td><form action="{{ url($listing->url1) }}"><button type="submit" class="btn btn-primary">100info</button></form> {{ $listing->url1 }} </td></tr>
                                    <tr><th> Url2 </th><td><form action="{{ url($listing->url2) }}"><button type="submit" class="btn btn-primary">Facebook</button></form> {{ $listing->url2 }} </td></tr>
                                 </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
