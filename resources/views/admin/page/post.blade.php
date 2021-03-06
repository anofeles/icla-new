@extends('admin.layouts.admin')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>პოსტი</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-app bg-success" href="{{route('admin.post.add', ['locale' => $locale])}}">
                                <i class="fas fa-plus"></i> დამატება
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6"></div>
                                    <div class="col-sm-12 col-md-6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example2"
                                               class="table table-bordered table-hover dataTable dtr-inline" role="grid"
                                               aria-describedby="example2_info">
                                            <thead>
                                            <tr role="row">
                                                <th rowspan="1" colspan="1">
                                                    id
                                                </th>
                                                <th rowspan="1" colspan="1">
                                                    სათაური
                                                </th>
                                                <th rowspan="1" colspan="1">
                                                    სორტირება
                                                </th>
                                                <th rowspan="1" colspan="1">
                                                    ატვირთვის თარიღი
                                                </th>
                                                <th rowspan="1" colspan="1">
                                                    აქტივობა
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($post as $postitem)
                                                <tr role="row" class="odd">
                                                    <td class="dtr-control sorting_1" tabindex="0">{{$postitem->id}}</td>
                                                    <td>{{$postitem->title}}</td>
                                                    <td>{{$postitem->sort}}</td>
                                                    <td>{{$postitem->created_at}}</td>
                                                    <td>
                                                        <a class="btn btn-app" href="{{route('admin.post.edit', ['postid'=>$postitem->id,'locale' => $locale])}}">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>
                                                        <a class="btn btn-app" href="{{route('admin.post.delete', ['postid'=>$postitem->id,'locale' => $locale])}}">
                                                            <i class="fas fa-trash-alt"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1">id</th>
                                                <th rowspan="1" colspan="1">სათაური</th>
                                                <th rowspan="1" colspan="1">სორტირება</th>
                                                <th rowspan="1" colspan="1">ატვირთვის თარიღი</th>
                                                <th rowspan="1" colspan="1">აქტივობა</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>

@endsection
