@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <!-- Current Listings -->
            @if (count($listings) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Listing
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped listing-table">
                            <thead>
                                <th>Listing</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($listings as $listing)
                                    <tr>
                                        <td class="table-text"><div>{{ $listing->titleeng }} / {{ $lsting->title}}</div></td>
                                        <!-- Show CategoryList Button -->
                                        <td>
                                            <form action="{{ url('listing/show') }}">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fa fa-btn"></i>All Listing
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif

            <!-- Related Posts -->
            @if (count($posts) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $listing->title }} >> Posts List
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped post-table">
                            <thead>
                                <th>Posts</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td class="table-text"><div>{{ $post->title }}</div></td>
                                        <!-- Show PostList Button -->
                                        <td>
                                            <form action="{{ url('post/'.$post->id) }}">
                                                <button type="submit" class="btn btn-info">
                                                    <i class="fa fa-btn"></i>Post
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
