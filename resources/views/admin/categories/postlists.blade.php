@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <!-- Current Categories -->
            @if (count($categories) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Category
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped category-table">
                            <thead>
                                <th>Category</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td class="table-text"><div>{{ $category->titleeng }} / {{ $category->title}}</div></td>
                                        <!-- Show CategoryList Button -->
                                        <td>
                                            <form action="{{ url('category/show') }}">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fa fa-btn"></i>All Category
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
                        {{ $category->title }} >> Posts List
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
